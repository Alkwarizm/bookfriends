<?php
declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;

trait HasSlug
{
    public static function bootHasSlug(): void
    {
        static::creating(function (Model $model) {
            if (! blank($model->slug)) return;

            $model->slug = static::generateUniqueSlug($model->name);
        });
    }

    protected static function generateUniqueSlug(string $name): string
    {
        $slug = str($name)->slug()->toString();

        while (static::whereSlug($slug)->exists()) {
            $slug = $slug . '-' . mt_rand(10000, 999999);
        }

        return $slug;
    }
}

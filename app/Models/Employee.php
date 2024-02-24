<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'email',
    ];

    public function contact(): HasOne
    {
        return $this->hasOne(EmployeeContact::class);
    }
}

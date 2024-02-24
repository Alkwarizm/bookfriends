<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'number' => ['required', 'string'],
            'country' => ['required', 'string'],
            'address' => ['required', 'string']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

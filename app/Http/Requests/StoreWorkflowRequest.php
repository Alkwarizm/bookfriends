<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkflowRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:150'],
            'description' => ['required', 'string', 'min:3', 'max:250'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}

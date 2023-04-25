<?php

namespace App\Http\Requests\Home;

use Illuminate\Foundation\Http\FormRequest;

class CalculateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', 'in:male,female'],
        ];
    }
}

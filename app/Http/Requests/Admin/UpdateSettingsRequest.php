<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class UpdateSettingsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'password'  => 'required|string',
            'new_password'  => 'required|string|min:8|max:16|confirmed',
        ];
    }

    /**
     * Update password method for web guard.
     *
     * @return void
     */
    public function authenticateWeb()
    {
        $validate = auth()->guard('admin')->validate([
            'email' => $this->user()->email,
            'password'  => $this->validated('password')
        ]);

        if(!$validate) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }
    }
}

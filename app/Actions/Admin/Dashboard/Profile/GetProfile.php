<?php

namespace App\Actions\Admin\Auth\Reset;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Requests
use Illuminate\Http\Request;

// Models
use App\Models\AdminPasswordReset;
use App\Models\Admin;

// Actions
use App\Actions\Action;
use App\Actions\Admin\Auth\Check\CheckCode;

class ResetPassword extends Action {
    use AsAction;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'new_password'  => 'required|string|min:8|max:16|confirmed',
        ];
    }

    /**
     * handle
     *
     * @param \Request $reques
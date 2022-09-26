<?php

namespace App\Actions\Admin\Auth\Forget;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Routes
use Illuminate\Support\Facades\Route;

class GetForgetPassword {
    use AsAction;

    /**
     * handle
     *
     * @return array
     */
    public function handle(): array
    {
        return [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ];
    }

    /**
     * get html response.
     *
     * @param  mixed $response
     * @return \Redirect
     */
    public function htmlResponse(array $response)
    {
        return inertia('Auth/Admin/ForgotPassword', $response);
    }

    /**
     * get json response.
     *
     * @param  mixed $response
     * @return void
     */
    public function jsonResponse(array $response)
    {
        //
    }
}

<?php

namespace App\Actions\Admin\Auth;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Routes
use Illuminate\Support\Facades\Route;

class GetLogin {
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
        return inertia('Auth/Admin/Login', $response);
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

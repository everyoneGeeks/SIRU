<?php

namespace App\Actions\Admin\Auth;

// Requests
use App\Http\Requests\Admin\LoginRequest;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Providers
use App\Providers\RouteServiceProvider;

class LoginAction {
    use AsAction;

    /**
     * handle login action.
     *
     * @param  \AdminLoginRequest $request
     * @return void
     */
    public function handle(LoginRequest $request): void
    {
        if(! $request->expectsJson()) {
            $request->authenticateWeb();

            $request->session()->regenerate();
        }
        else {
            // For Api login to return token.
        }
    }

    /**
     * get html response data.
     *
     * @param  mixed $data
     * @return \Redirect
     */
    public function htmlResponse()
    {
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * get json response data.
     *
     * @param  mixed $data
     * @return void
     */
    public function jsonResponse()
    {
        //
    }
}

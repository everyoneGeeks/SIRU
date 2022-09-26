<?php

namespace App\Actions\Admin\Dashboard\Home;

// Requests
use Illuminate\Http\Request;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class LogoutAction {
    use AsAction;

    /**
     * handle
     *
     * @param \Request $request
     * @return void
     */
    public function handle(Request $request): void
    {
        if(! $request->expectsJson()) {
            auth()->guard('admin')->logout();
        }
        else {
            // For Api logout to invalidate the token.
        }
    }

    /**
     * get logout status.
     *
     * @param  mixed $is_logout
     * @return \Redirect
     */
    public function htmlResponse()
    {
        return redirect()->route('admin.login');
    }

    /**
     * get jsonlogout statusonse.
     *
     * @param  mixed $is_logout
     * @return void
     */
    public function jsonResponse()
    {
        //
    }
}

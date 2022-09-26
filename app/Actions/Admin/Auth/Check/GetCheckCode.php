<?php

namespace App\Actions\Admin\Auth\Check;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class GetCheckCode {
    use AsAction;

    /**
     * handle
     *
     * @return void
     */
    public function handle(): void
    {
        //
    }

    /**
     * get html response.
     *
     * @return \Redirect
     */
    public function htmlResponse()
    {
        return inertia('Auth/Admin/CheckReset');
    }

    /**
     * get json response.
     *
     * @return void
     */
    public function jsonResponse()
    {
        //
    }
}

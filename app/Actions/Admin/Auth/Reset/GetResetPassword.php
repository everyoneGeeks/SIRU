<?php

namespace App\Actions\Admin\Auth\Reset;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class GetResetPassword {
    use AsAction;

    /**
     * handle
     *
     * @return array
     */
    public function handle(): array
    {
        return [
            //
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
        return inertia('Auth/Admin/ResetPassword', $response);
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

<?php

namespace App\Actions\Admin\Dashboard\Profile;

// Action
use App\Actions\Action;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class GetProfile extends Action {
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
        return inertia('Admin/Profile');
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
                                                   
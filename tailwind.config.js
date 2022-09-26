<?php

namespace App\Actions\Admin\Dashboard\Roles;

// Action
use App\Actions\Action;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class CreateRoles extends Action {
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
        return inertia('Admin/Roles/Create');
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
                                                                                                                                       
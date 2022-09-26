<?php

namespace App\Actions\Admin\Dashboard\Home;

// Action
use App\Actions\Action;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class GetHome extends Action {
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
        return inertia('Admin/Dashboard', $response);
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

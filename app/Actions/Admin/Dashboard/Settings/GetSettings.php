<?php

namespace App\Actions\Admin\Dashboard\Settings;

// Action
use App\Actions\Action;

// Inertia
use Inertia\Inertia;
use Lorisleiva\Actions\Concerns\AsAction;

class GetSettings extends Action {
    use AsAction;

    /**
     * handle
     *
     * @return array
     */
    public function handle(): array
    {
        return [

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
        return Inertia::render('Admin/Settings', $response);
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

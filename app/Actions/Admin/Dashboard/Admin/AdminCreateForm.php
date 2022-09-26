<?php

namespace App\Actions\Admin\Dashboard\Admin;

use Inertia\Inertia;

//Models
use Lorisleiva\Actions\Concerns\AsAction;

/**
 * Admin create form
 *
 * @method void handle()
 * @method redirect  htmlResponse()
 * @method void jsonResponse()
 */
class AdminCreateForm
{
    use AsAction;

     /**
     * handle
     *
     * @return void
     */
    public function handle():void
    {


    }


/**
     * get html response.
     *
     * @param  mixed $response
     * @return \Redirect
     */
    public function htmlResponse()
    {

        return Inertia::render('Admin/Create');
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

<?php

namespace App\Actions\Admin\Dashboard\Admin;

use Inertia\Inertia;
use App\Models\Admin;
use Illuminate\Http\Request;
use Lorisleiva\Actions\Concerns\AsAction;

class AdminEditForm
{
    use AsAction;

/**
     * handle
     *
     * @return void
     */
    public function handle(Admin $admin,Request $request)
    {

        $admin=Admin::where('id',$request->id)->first();
        return ['admin'=>$admin] ;



    }


/**
     * get html response.
     *
     * @param  mixed $response
     * @return \Redirect
     */
    public function htmlResponse(array $data)
    {

        return Inertia::render('Admin/Edit',$data);
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

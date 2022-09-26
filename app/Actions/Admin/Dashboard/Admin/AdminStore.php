<?php

namespace App\Actions\Admin\Dashboard\Admin;

use Inertia\Inertia;
use App\Models\Admin;
use App\Traits\MessagesTrait;
use Lorisleiva\Actions\ActionRequest;
use Illuminate\Support\Facades\Redirect;
use Lorisleiva\Actions\Concerns\AsAction;


/**
 * Store Admin data
 * @method array rules()
 * @method array handle()
 * @method redirect  htmlResponse()
 * @method void jsonResponse()
 */
class AdminStore
{
    use AsAction,MessagesTrait;

    /**
     * validation rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'email'=>['required','unique:admins,email'],
            'name'=>['required'],
            'password'=>['required','min:8'],
            'avatar' => ['nullable', 'image', 'max:2048','mimes:jpeg,png,jpg,gif,svg'],
            'is_active'=>['nullable']
        ];
    }

/**
 * store admin data
 *
 * @param Admin $admin
 * @param ActionRequest $request
 * @return array
 */
    public function handle(Admin $admin,ActionRequest $request):array
    {
        $admin::query()->create($request->validated());

         return [
             'message'   => $this->successMessage(__('messages.created'))
         ];

    }


    /**
     * get html response.
     *
     * @param  mixed $data
     * @return \Redirect
     */
    public function htmlResponse(array $data)
    {
        return Redirect::route('admin.admins')->with($data['message']);





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

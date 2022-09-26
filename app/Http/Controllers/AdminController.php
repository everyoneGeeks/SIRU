<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{

    public function index()
    {

       return Inertia::render('Admin/Index',[
           'admins'=>Admin::latest()->paginate(10)
       ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Create');
    }


    public function  store(Request $request)
    {

       $this->validate($request,[
            'email'=>['required','unique:admins,email'],
            'name'=>['required'],
            'password'=>['required','min:8'],
            'avatar' => ['nullable', 'image', 'max:2048','mimes:jpeg,png,jpg,gif,svg'],
        ]);






        $storeAdmin=new Admin;
        $storeAdmin->name=$request->name;
        $storeAdmin->password=Hash::make($request->password);
        $storeAdmin->email=$request->email;
        $storeAdmin->is_active=true;
        if ($request->avatar) {
            $imageName = time().'.'.$request->avatar->extension();

            $request->avatar->move(public_path('avatar'), $imageName);
            $storeAdmin->avatar=public_path('avatar').'/'.$imageName;
         }

        $storeAdmin->save();


        return Redirect::route('admin.index');


    }







    public function edit($id)
    {


    }




    public function update (Request $request,$id)
    {

       $this->validate($request,[
            'email'=>['required','unique:admins,email,except,id'],
            'name'=>['required'],
            'password'=>['min:8'],

        ]);

        $updateAdmin=Admin::where('id',$id)->first();
        $updateAdmin->name=$request->name;
        $updateAdmin->password=$request->password !== null ? :Hash::make($request->password);
        $updateAdmin->email=$request->email;
        $updateAdmin->is_active=$request->is_active;
        $updateAdmin->save();


        return Redirect::route('admin.index');


    }


    public function destroy($id)
    {
        $deleteAdmin=Admin::where('id',$id)->delete();

        return Redirect::route('admin.index');

    }


}

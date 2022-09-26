<?php

use Illuminate\Support\Facades\Route;

// Actions
use App\Actions\Admin\Auth\{
    GetLogin,
    LoginAction,
    Forget\GetForgetPassword,
    Forget\CreateResetPassword,
    Check\GetCheckCode,
    Check\CheckCode,
    Reset\GetResetPassword,
    Reset\ResetPassword,
};
use App\Actions\Admin\Dashboard\{
    Home\GetHome,
    Home\LogoutAction,
    Settings\GetSettings,
    Settings\UpdateSettings,
    Profile\GetProfile,
    Profile\UpdateProfile,

    //Admin Section
    Admin\AdminList,
    Admin\AdminCreateForm,
    Admin\AdminStore,
    Admin\AdminDestroy,
    Admin\AdminEditForm,
    Admin\AdminUpdate,
    Admin\AdminSearch
};





Route::middleware(['guest:admin'])->group(function() {
    Route::get('login', GetLogin::class)->name('login');
    Route::post('login', LoginAction::class)->name('login');

    Route::get('forgot-password', GetForgetPassword::class)->name('password.request');
    Route::post('forgot-password', CreateResetPassword::class)->name('password.forget');

    Route::get('check-password/check', GetCheckCode::class)->name('reset.check');
    Route::post('check-password/{email}', CheckCode::class)->name('reset.check.action');

    Route::get('reset-password/code', GetResetPassword::class)->name('reset.index');
    Route::post('reset-password/{code}', ResetPassword::class)->name('password.reset');
});

Route::middleware(['auth:admin'])->prefix('dashboard')->group(function() {
    Route::get('/', GetHome::class)->name('home');

    Route::get('settings', GetSettings::class)->name('settings');
    Route::post('settings', UpdateSettings::class)->name('settings');

    Route::get('profile', GetProfile::class)->name('profile');
    Route::post('profile', UpdateProfile::class)->name('profile');

    Route::post('/logout', LogoutAction::class)->name('logout');
});

//Admin
Route::get('/admins', AdminList::class)->name('admins');
Route::get('/admin/create', AdminCreateForm::class)->name('admin.create');
Route::post('/admin/store', AdminStore::class)->name('admin.store');

Route::get('/admin/{id}/edit', AdminEditForm::class)->name('admin.edit');
Route::post('/admin/{id}/update', AdminUpdate::class)->name('admin.update');
Route::post('/admin/{id}/delete', AdminDestroy::class)->name('admin.delet');
Route::post('/admin/search', AdminSearch::class)->name('admin.search');

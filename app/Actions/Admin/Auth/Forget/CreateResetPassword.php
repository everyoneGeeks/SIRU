<?php

namespace App\Actions\Admin\Auth\Forget;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Requests
use App\Http\Requests\Admin\ForgetPasswordRequest;

// Models
use App\Models\AdminPasswordReset;
use App\Models\Admin;

// Notifications
use App\Notifications\Admin\ForgetNotification;

class CreateResetPassword {
    use AsAction;

    /**
     * handle
     *
     * @param \ForgetPasswordRequest $request
     * @return array
     */
    public function handle(ForgetPasswordRequest $request): array
    {
        $admin = Admin::where('email', $request->only('email'))->first();

        $forget  = $this->forgetPassword($request);

        $admin->notify(new ForgetNotification($forget['code']));

        return [
            'email' => $request->email
        ];
    }

    /**
     * forgetPassword
     *
     * @param \ForgetPasswordRequest $request
     * @return array
     */
    protected function forgetPassword(ForgetPasswordRequest $request): array
    {
        $code = rand(111111,999999);

        $data = [
            'code' => $code,
            'created_at' => now(),
            'email' => $request->email
        ];

        AdminPasswordReset::updateOrCreate([
            ['email', $request->email],
            ['created_at', '<=', now()->addMinutes(env('EMAIL_RESET_TIMEOUT'))]
        ], $data);

        return [
            'code' => $code
        ];
    }

    /**
     * get html response.
     *
     * @param  array $response
     * @return \Redirect
     */
    public function htmlResponse(array $response)
    {
        return redirect()->route('admin.reset.check', [
            'email' => $response['email']
        ]);
    }

    /**
     * get json response.
     *
     * @param  array $response
     * @return void
     */
    public function jsonResponse(array $response)
    {
        //
    }
}

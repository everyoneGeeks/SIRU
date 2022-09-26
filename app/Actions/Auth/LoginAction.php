<?php

namespace App\Actions\Auth;

use App\Exceptions\Handler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Lorisleiva\Actions\Concerns\AsAction;
use App\Traits\ResponseTrait;

use App\Models\Admin;
use Exception;

class LoginAction {
    use AsAction, ResponseTrait;

    public function rules()
    {
        return [
            'email'    => ['required', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * handle login action.
     *
     * @param  Request $request
     * @return array
     */
    public function handle(Request $request): array
    {
        try {
            auth()->guard('admin')->attempt($request->only('email', 'password'));

            $admin = auth()->guard('admin')->user();
            if($admin) {
                $token = $admin->createToken('Web', ['admin']);

                return [
                    'data'      => [
                        'token' => $token->plainTextToken
                    ],
                    'message'   => __('auth.login success'),
                    'code'      => Handler::SUCCESS
                ];
            }

            throw new Exception(__('auth.login fail'), Handler::INVALID_DATA);
        }catch(Exception $e) {

            return [
                'data'      => [],
                'code'      => $e->getCode(),
                'message'   => $e->getMessage(),
            ];
        }
    }

    public function htmlResponse(array $response)
    {
        if($response['code'] == Handler::SUCCESS)
            return redirect()->intended('/dashboard');

        else return back()->withErrors([
            'message'   => $response['message']
        ]);
        // return Inertia::render('Auth/Login', [
        //     'message'   => $response['message']
        // ]);
    }

    public function jsonResponse(array $response)
    {
        return response()->json($this->getResponseBody($response['data'], $response['message']), $response['code']);

    }
}

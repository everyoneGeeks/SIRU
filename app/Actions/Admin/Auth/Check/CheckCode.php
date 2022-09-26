<?php

namespace App\Actions\Admin\Auth\Check;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Request
use Illuminate\Http\Request;

// Models
use App\Models\AdminPasswordReset;

// Carbon
use Carbon\Carbon;

// Validation
use Illuminate\Validation\ValidationException;

class CheckCode {
    use AsAction;

    /**
     * handle
     *
     * @param \Request  $request
     * @param string    $email
     * @return string
     */
    public function handle(Request $request, string $email): string
    {
        $reset = AdminPasswordReset::where([
            'code'  => $request->code,
            'email' => $email
        ])->first();

        $this->checkCode($reset);

        return $request->code;
    }

    /**
     * check code.
     *
     * @param  \AdminPasswordReset|null $reset
     * @return void
     */
    public function checkCode(mixed $reset): void
    {
        if(!$reset) {
            throw ValidationException::withMessages([
                'message' => __('auth.code_faild'),
            ]);
        }

        if(Carbon::parse($reset->created_at)->addMinutes(config('app.reset_timeout'))->lte(now())) {
            throw ValidationException::withMessages([
                'message' => __('auth.code_timeout'),
            ]);
        }
    }

    /**
     * get html response.
     *
     * @param  string $code
     * @return \Redirect
     */
    public function htmlResponse(string $code)
    {
        return redirect()->route('admin.reset.index', [
            'code' => $code
        ]);
    }

    /**
     * get json response.
     *
     * @param  string $code
     * @return void
     */
    public function jsonResponse(string $code)
    {
        //
    }
}

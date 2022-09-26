<?php

namespace App\Actions\Admin\Dashboard\Settings;

// Action
use App\Actions\Action;

// Request
use App\Http\Requests\Admin\UpdateSettingsRequest;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateSettings extends Action {
    use AsAction;

    /**
     * handle
     *
     * @return array
     */
    public function handle(UpdateSettingsRequest $request): array
    {
        if(! $request->expectsJson()) {
            $request->authenticateWeb();

            $user = auth()->guard('admin')->user();
        }
        else {
            // For Api update password and define user instance.
        }

        $user->update([
            'password'  => $request->validated('new_password')
        ]);

        return [
            'message'   => $this->successMessage(__('messages.updated'))
        ];
    }

    /**
     * Get html response.
     *
     * @param  mixed $response
     * @return \Redirect
     */
    public function htmlResponse(array $response)
    {
        return back()->with($response['message']);
    }

    /**
     * Get json response.
     *
     * @param  mixed $response
     * @return void
     */
    public function jsonResponse(array $response)
    {
        //
    }
}

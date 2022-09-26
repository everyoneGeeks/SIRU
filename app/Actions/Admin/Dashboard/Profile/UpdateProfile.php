<?php

namespace App\Actions\Admin\Dashboard\Profile;

// Action
use App\Actions\Action;

// Request
use App\Http\Requests\Admin\UpdateProfileRequest;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

class UpdateProfile extends Action {
    use AsAction;

    /**
     * handle
     *
     * @return array
     */
    public function handle(UpdateProfileRequest $request): array
    {
        if(! $request->expectsJson()) {
            $user = auth()->guard('admin')->user();
        }
        else {
            // For Api define of user.
        }

        $user->update($request->validated());

        return [
            'message'   => $this->successMessage(__('messages.updated'))
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
        return inertia('Admin/Profile');    }

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

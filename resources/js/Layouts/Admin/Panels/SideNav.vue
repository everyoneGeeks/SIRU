<?php

namespace App\Actions\Admin\Dashboard\Roles;

// Action
use App\Actions\Action;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Requests
use App\Http\Requests\Admin\StoreRolesRequest;

// Pagination
use Illuminate\Pagination\Paginator;

// Bouncer
use Bouncer;

class StoreRoles extends Action {
    use AsAction;

    /**
     * handle
     *
     * @return array
     */
    public function handle(StoreRolesRequest $request): array
    {
        Bouncer::role()->firstOrCreate($request->validated());

        return [
            'message' => $this->successMessage(__('messages.created'))
        ];
    }

    /**
     * get html response.
     *
     * @param array $data
     * @return \Redirect
     */
    public f
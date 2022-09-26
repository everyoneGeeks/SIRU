<?php

namespace App\Actions\Admin\Dashboard\Roles;

// Action
use App\Actions\Action;

// Inertia
use Lorisleiva\Actions\Concerns\AsAction;

// Bouncer
use Bouncer;


// Resources
use App\Http\Resources\RolesCollection;

class GetRoles extends Action {
    use AsAction;

    /**
     * handle
     *
     * @return \RolesCollection
     */
    public function handle(): RolesCollection
    {
        $search = request()->search;

        $roles = Bouncer::role()->when($search, function($query, $keyword) {
                $query->where('name', 'like', "%{$keyword}%")
                      ->orWhere('title', 'like', "%{$keyword}%");
        })->orderBy('id','DESC')->paginate();

        $rolesCollection = new RolesCollection($roles);

        return $rolesCollection;
    }

    /**
     * get html response.
     *
     * @param \RolesCollection $roles
     * @return \Redirect
     */
    public function htmlResponse(RolesCollection $roles)
    {
        return inertia('Admin/Roles/Index', [
            'tableData' => $roles,
        ]);
    }

    /**
     * get json response.
     *
     * @param \RolesCollection $roles
     * @return void
     */
    public function jsonResponse(RolesCollection $roles)
    {
        //
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
<?php

use App\Classes\Bouncer;

return [
    'admins' => [
        Bouncer::VIEW_ADMINS,
        Bouncer::CREATE_ADMINS,
        Bouncer::EDIT_ADMINS,
        Bouncer::DELETE_ADMINS
    ],
];

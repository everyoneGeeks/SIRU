<?php

namespace App\Traits;

trait ResponseTrait {

    /**
     * get response body.
     *
     * @return Array
     */
    public function getResponseBody($data = [], $message = ''): Array
    {
        return [
            'data'          => $data,
            'message'       => $message
        ];
    }
}

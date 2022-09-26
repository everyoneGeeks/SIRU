<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait MessagesTrait {

    /**
     * Get success message.
     *
     * @param  string $message
     * @return array
     */
    public function successMessage($message): array
    {
        return $this->getMessageObject($message, 'success');
    }

    /**
     * Get danger message.
     *
     * @param  string $message
     * @return array
     */
    public function dangerMessage($message): array
    {
        return $this->getMessageObject($message, 'danger');
    }

    /**
     * Get warn message.
     *
     * @param  string $message
     * @return array
     */
    public function warnMessage($message): array
    {
        return $this->getMessageObject($message, 'warn');
    }

    /**
     * Get message.
     *
     * @param  string $message
     * @param  string $type
     * @return array
     */
    protected function getMessageObject($message, $type): array
    {
        return [
            'message' => [
                'type'  => $type,
                'value' => $message,
            ]
        ];
    }

    /**
     * Get flash message.
     *
     * @param  \Request $request
     * @return Object|null
     */
    public function getFlashMessage(Request $request): mixed
    {
        return $request->session()->get('message');
    }
}

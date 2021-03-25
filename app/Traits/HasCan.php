<?php

namespace App\Traits;

trait HasCan
{
    public function getCanAttribute()
    {
        $currentUser = request()->user();
        return [
            'view' => $currentUser->can('view', $this),
            'update' => $currentUser->can('update', $this),
            'update' => $currentUser->can('update', $this),
        ];
    }
}

<?php

namespace App\Domain\Users\Responders;

use App\Models\User;

class ShowUserResponder
{
    public function respond(User $user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }
}
<?php

namespace App\Domain\Users\Actions;

use App\Domain\Users\Responders\ShowUserResponder;

class ShowUserAction
{
    public function __invoke(User $user, ShowUserResponder $responder)
    {
        return $responder->respond($user);
    }
}
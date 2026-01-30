<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    public function atualizar(User $user, Link $link)
    {
        return $link->user->is($user)
        ? Response::allow()
        : Response::deny('Esse link não é seu.');
    }

    public function destroy(User $user, Link $link)
    {
        return $link->sort == 6
        ? Response::allow()
        : Response::deny('Só pode deletar se o sort for igual a 6.');
    }
}

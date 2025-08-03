<?php

namespace App\Policies;

use App\Models\LinkedAccount;
use App\Models\SocialAccount;
use App\Models\User;

class SocialAccountPolicy
{
    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SocialAccount $socialAccount): bool
    {
        return $user->id === $socialAccount->user_id;
    }
}

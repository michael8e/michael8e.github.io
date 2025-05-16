<?php

namespace App\Policies;

use App\Models\Channel;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChannelPolicy
{
    use HandlesAuthorization;



    public function update(User $user, Channel $channel)
    {


        return $user->id === $channel->user_id;
    }
}

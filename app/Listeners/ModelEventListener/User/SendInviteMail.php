<?php

namespace App\Listeners\ModelEventListener\User;

use App\Events\ModelEvents\UserCreated;
use App\Tools\Authenticates\InviteAble;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInviteMail
{
    use InviteAble;

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        $this->invite($event->user);
    }
}

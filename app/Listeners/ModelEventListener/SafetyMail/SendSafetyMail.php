<?php

namespace App\Listeners\ModelEventListener\SafetyMail;

use App\Events\ModelEvents\SafetyMailCreated;
use App\Mail\SafetyMail;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
class SendSafetyMail
{
    /**
     * Handle the event.
     *
     * @param  SafetyMailCreated  $event
     * @return void
     */
    public function handle(SafetyMailCreated $event)
    {
        foreach (User::notResignation()->get() as $user) {
            Mail::to($user->email)->send(new SafetyMail($event->safetyMail, $user));
        }
    }
}

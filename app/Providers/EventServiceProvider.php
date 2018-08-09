<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // ユーザー作成したらメールを送信する
        'App\Events\ModelEvents\UserCreated' => [
            'App\Listeners\ModelEventListener\User\SendInviteMail',
        ],
        // 安否確認メールを作成したらメール送信する
        'App\Events\ModelEvents\SafetyMailCreated' => [
            'App\Listeners\ModelEventListener\SafetyMail\SendSafetyMail',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}

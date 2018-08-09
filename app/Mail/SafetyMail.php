<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\SafetyMail as SafetyMailModel;

class SafetyMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * 安否確認メールのインスタンス
     * @var SafetyMailModel
     */
    public $safetyMail;

    /**
     * ユーザーのインスタンス
     * @var User
     */
    public $user;

    /**
     * SafetyMail constructor.
     * @param SafetyMailModel $safetyMail
     * @param User $user
     */
    public function __construct(SafetyMailModel $safetyMail, User $user)
    {
        $this->safetyMail = $safetyMail;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->safetyMail->title)
            ->markdown('emails.safety-mail')->with([
                'safetyMail' => $this->safetyMail,
                'user' => $this->user,
            ]);
    }
}

<?php

namespace App\Mail;

use App\Tools\Authenticates\LoginToken;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class InviteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var LoginToken
     */
    public $loginToken;

    /**
     * Create a new message instance.
     *
     * @param LoginToken $loginToken
     */
    public function __construct(LoginToken $loginToken)
    {
        $this->loginToken = $loginToken;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('【社内システム】アカウントが登録されました。')
            ->markdown('emails.auth.invite')->with('token', $this->loginToken);
    }
}

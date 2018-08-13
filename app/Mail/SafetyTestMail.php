<?php

namespace App\Mail;

use http\Env\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\SafetyMail as SafetyMailModel;

class SafetyTestMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var SafetyMailModel
     */
    private $title;
    private $contents;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($title, $contents)
    {
        $this->title = $title;
        $this->contents = $contents;
    }

    /**
     * Build the message.
     *
     * @param SafetyMail $safetyMail
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->title)
            ->markdown('emails.safety-test-mail')
            ->with([
                'title' => $this->title,
                'contents' => $this->contents,
            ]);
    }
}

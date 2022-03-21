<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExceptionOccurred extends Mailable
{
    use Queueable, SerializesModels;

    private $content;

    public function __construct($content)
    {
        //
        $this->content = $content;
    }

    public function build()
    {
        return $this
            ->markdown('email.exception-occurred')
            ->with('content', $this->content);
    }
}

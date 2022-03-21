<?php

namespace App\Mail;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Symfony\Component\ErrorHandler\Exception\FlattenException;

class ExceptionOccurred extends Mailable
{
    use Queueable, SerializesModels;

    private Exception $exception;

    public function __construct(Exception $exception)
    {
        $this->exception = $exception;
    }

    public function build()
    {
        $e = FlattenException::create($this->exception);
        $handler = new HtmlErrorRenderer(true); // boolean, true raises debug flag...
        $css = $handler->getStylesheet();
        $e->setTrace(array_slice($e->getTrace(), 0, 3), $e->getFile(), $e->getLine());
        $content = $handler->getBody($e);

        return $this
            ->markdown('email.exception-occurred')
            ->subject('Exception: ' . request()->fullUrl() )
            ->with('content', $content)
            ->with('css', $css);
    }
}

<?php

namespace App\Exceptions;

use App\Mail\ExceptionOccurred;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Mail;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Exception $e) {
            $this->sendEmail($e);
        });
    }

    /**
     * Sends an email to the developer about the exception.
     *
     * @return void
     */
    public function sendEmail(Exception $exception)
    {
        Mail::to('dvancov@hotmail.com')
            ->send(new ExceptionOccurred($exception));
    }
}

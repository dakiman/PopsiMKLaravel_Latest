<?php

namespace Tests\Unit;

use App\Mail\ExceptionOccurred;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $e = new \Exception();
        Mail::to('dvancov@hotmail.com')
            ->send(new ExceptionOccurred($e));
        $this->assertTrue(true);
    }
}

<?php

namespace App\Listeners\Auth;

use App\Events\Auth\UserForgotPasswordEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendForgotPasswordEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Auth\UserForgotPasswordEmail  $event
     * @return void
     */
    public function handle(UserForgotPasswordEmail $event)
    {
        //
    }
}

<?php

namespace App\Listeners\Auth;

use App\Events\Auth\UserActivationEmail;
use App\Mail\Auth\ActivationEmail;
use Mail;


class SendActivationEmail
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
     * @param  \App\Events\Auth\UserActivationEmail  $event
     * @return void
     */
    public function handle(UserActivationEmail $event)
    {
        try {
            if ($event->user->isVerified) {
                return;
            }

            Mail::to($event->user->email)->send(new ActivationEmail($event->user));
        } catch (\Exception $ex) {
            // skip if e-mail cannot be sent
        }
    }
}

<?php

namespace App\Listeners\Auth;


use App\Mail\Auth\ForgotPasswordEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\Auth\UserForgotPasswordEmail;
use Mail;

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
    public function handle(UserForgotPasswordEmail $prop)
    {
        try {
            //
            Mail::to($prop->email)->send(new ForgotPasswordEmail($prop->token, $prop->email, $prop->nama_lengkap));
        } catch (\Exception $ex) {
            // skip if e-mail cannot be sent
        }
    }
}

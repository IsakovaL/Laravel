<?php

namespace App\Listeners;

use App\Events\UserEmailVerified;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogVerifiedUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public $event;

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserEmailVerified  $event
     * @return void
     */
    public function handle(UserEmailVerified $event)
    {
        //
        
        Log::debug('user ' . $event->user->name . ' is verified');

    }
}

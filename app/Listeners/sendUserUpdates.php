<?php

namespace App\Listeners;

use App\Events\updateUsers;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendUserUpdates
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
     * @param  updateUsers  $event
     * @return void
     */
    public function handle(updateUsers $event)
    {
        //
    }
}

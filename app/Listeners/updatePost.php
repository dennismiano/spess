<?php

namespace App\Listeners;

use App\Events\postCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class updatePost
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
     * @param  postCreated  $event
     * @return void
     */
    public function handle(postCreated $event)
    {
        //
    }
}

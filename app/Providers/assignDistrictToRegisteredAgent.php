<?php

namespace App\Providers;

use App\Providers\agentBeingRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class assignDistrictToRegisteredAgent
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
     * @param  agentBeingRegistered  $event
     * @return void
     */
    public function handle(agentBeingRegistered $event)
    {
        //
    }
}

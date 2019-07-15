<?php

namespace App\Listeners;

use App\Events\agentBeingRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use DB;

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
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\agent;
use App\Events\agentBeingRegistered;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function registerAgent($agentid)
    {
        $agent = Agent::findOrFail($agentid);

        // Purchase podcast logic...

        Event::fire(new agentBeingRegistered($agent));
    }
}

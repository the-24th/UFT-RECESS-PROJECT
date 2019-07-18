<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\agentBeingRegistered;
use Illuminate\Support\Facades\Gate;
use App\Controllers\forms;

class EventController extends Controller
{
    public function index(){
        $add=new agent();
        event(new agentBeingRegistered($add));
    }
}

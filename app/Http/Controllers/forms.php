<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent;

class forms extends Controller
{
    public function register()
    {
        $add = new agent();
        $add->fname = request('fname');
        $add->lname = request('lname');
        $add->number = request('telephone');
        $add->district = request('district');
        $add->sex = request('gender');
        $add->signature = request('sign');
        $add->save();
        return redirect('agentslist')->with('success', 'DATA ADDED');
    }

}

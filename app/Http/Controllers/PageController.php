<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageController extends Controller
{
        public function index(){
        return view('agentregister');
    }

    public function list(){
        $adds = DB::select('select * from agents');
        return view('agentslist', compact('adds'))->with('SUCCESS', 'DATA ADDED');
    }

    public function arch(){
        return view('archy');
    }

    public function don(){
        return view('donation');
    }

    public function roll(){
        return view('enroll');
    }

    public function fun(){
        return view('funding');
    }

    public function mem(){
        $mems= DB::select('select * from members');
        return view('members', compact('mems'));
    }

    public function mon(){
        return view('moneyregister');
    }

    public function up(){
        return view('upgrade');
    }

    public function money(){
        $donors = DB::select('select * from donations');
        return view('tre', compact('donors'));
    }
}


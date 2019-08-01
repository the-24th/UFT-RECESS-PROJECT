<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\agenthead;
class PrintController extends Controller
{
      public function index()
      {
            $agenthead = agenthead::all();
            return view('printagenthead')->with('agenthead', $agenthead);;
      }
      public function prnpriview()
      {
            $agenthead = agenthead::all();
            return view('agentagenthead')->with('agenthead', $agenthead);;
      }
}
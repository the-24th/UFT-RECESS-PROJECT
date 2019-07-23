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
        return view('agentslist', compact('adds'));
    }

    public function arch(){
        return view('archy');
    }

          public function tree(Request $request)
    {
        $conn = mysqli_connect("localhost", "root", "", "recess");
        $district = $request->input('search');
        $agenthead = "SELECT * from agentheads where district_assigned ='$district'";
        $result = mysqli_query($conn, $agenthead);
        $data = mysqli_fetch_array($result);
        $fname = $data['fname'];
        $lname = $data['lname'];

        $agent = "SELECT fname from agents where district_assigned ='$district'";
        $result1 = mysqli_query($conn, $agent);
        $data1 = mysqli_fetch_assoc($result1);
        //$agentfnames = $data1['fname'];
        //$agentlnames = $data1['lname'];
        //$data1 = DB::table("agents")->where('district_assigned', '$district')->get();
        

        return view('tree')->with('fname', $fname)->with('lname', $lname)->with('data1', $data1)->with('district', $district);
    }
    public function roll(){
        return view('enroll');
    }

    /*public function fun(){
        return view('funding');
    }*/

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

    public function high(){
        return view('highest');
    }

    public function ahigh(){
        return view('agents');
    }

    public function ahead(){
        return view('agenthead');
    }

    public function agent(){
        return view('normal');
    }

    public function pays(){
        $high = DB::select('select * from highest_enrollment_districts limit 1');
        $normal = DB::select('select * from district_pay limit 1');
        return view('pay')->with('high',$high)->with('normal',$normal);
    }

    public function money(){
        $donors = DB::select('select * from donations');
        return view('tre', compact('donors'));
    }
}


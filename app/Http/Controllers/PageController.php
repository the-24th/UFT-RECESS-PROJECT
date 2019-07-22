<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent;
use DB;

class PageController extends Controller
{
        public function index(){
        return view('agentregister');
    }

        public function edit($agentid)
    {
        $agent = agent::find($agentid);
        return view('layouts.agentedit', compact('agent', 'agentid'));
    }

   
          public function update(Request $request, $agentid)
    {
       $agent = agent::find($agentid);


       $agent->fname = $request->get('fname');
        $agent->lname = $request->get('lname');
        $agent->number = $request->get('telephone');
        $agent->district = $request->get('district');
        $agent->date = $request->get('date');
        $agent->district_assigned = $request->get('district_assigned');
        $agent->sex = $request->get('gender');
        $agent->signature = $request->get('sign');
        $agent->save();
        return redirect('agentslist')->with('success', 'Data Updated');
    }

    public function delete($agentid)
    {
        $conn = mysqli_connect('localhost','root','','recess');
        $sql = "SELECT * from agents where agentid= $agentid";
        $result1 = mysqli_query($conn, $sql);
        $data1 = mysqli_fetch_array($result1);
        $district_assigned = $data1['district_assigned'];
        $minus = "UPDATE districts set Number_of_agents=Number_of_agents-1 where name='$district_assigned'";
        $result1 = mysqli_query($conn, $minus);
        DB::table('agents')->where('agentid',$agentid)->delete();

       return redirect('agentslist')->with('success', 'Deleted');   
    }

    public function list(){

        $adds = DB::select('select * from agents');
        return view('agentslist', compact('adds'));
    }

    public function change(){
        return view('edit');
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

        //$agent = "SELECT * from agents where district_assigned ='$district'";
        //$result1 = mysqli_query($conn, $agent);
        //$data1 = mysqli_fetch_array($result1);
        //$agentfnames = $data1['fname'];
        //$agentlnames = $data1['lname'];
        $data1 = DB::table("agents")->where("district_assigned", "=", '$district')->get();
     
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

    public function head(){
        $conn = mysqli_connect('localhost','root','','recess');

        $sql = "SELECT * from agents group by district_assigned";
        $result = mysqli_query($conn, $sql);
        while($rows = mysqli_fetch_array($result))
        {
	    $agentid = $rows['agentid'];
	    $fname = $rows['fname'];
	    $lname = $rows['lname'];
	    $sex = $rows['sex'];
	    $district = $rows['district'];
	    $number = $rows['number'];
	    $district_assigned = $rows['district_assigned'];
	    $date = $rows['date'];
	    $signature = $rows['signature'];
			$work = "INSERT into agentheads(agentid, fname, lname, sex, district, number,  district_assigned, date, signature)
            values('$agentid', '$fname', '$lname', '$sex', '$district', '$number', '$district_assigned', '$date', '$signature')";
            mysqli_query($conn, $work);
        }


        $adds = DB::select('select * from agentheads');
        return view('agenthead')->with('adds',$adds);
    }


}


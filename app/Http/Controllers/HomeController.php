<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agenthead;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

       public function edit1($agentid)
    {
        $agent = agent::find($agentid);
        return view('layouts.agentedit1', compact('agent', 'agentid'));
    }

        public function update1(Request $request, $agentid)
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
        return redirect('home')->with('success', 'Data Updated');
    }

    public function index()
    {
        $conn = mysqli_connect('localhost','root','','recess');



        $query1 = 'select sum(amount) as "dimes" from donations';
        $res1 = mysqli_query($conn, $query1);
        $data1 = mysqli_fetch_array($res1);

        $query2 = 'select count(id) as "mems" from members';
        $res2 = mysqli_query($conn, $query2);
        $data2 = mysqli_fetch_array($res2);

        $query3 = 'select count(agentid) as "agent" from agents';
        $res3 = mysqli_query($conn, $query3);
        $data3 = mysqli_fetch_array($res3);

        $hero = DB::select('SELECT districts.name, districts.members_enrolled, districts.Number_of_agents,agentheads.fname, agentheads.lname from districts left join agentheads on districts.name=agentheads.district_assigned');



        return view('home')->with('data1',$data1)->with('data2',$data2)->with('data3',$data3)->with('hero',$hero);
        mysqli_close($conn);
    }
}

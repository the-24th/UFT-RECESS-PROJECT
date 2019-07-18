<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class search extends Controller
{
   /* public function agents()
    {
        $look = DB::select('select * from agents where ');
    }*/

    public function members(Request $request)
    {
        $finds = DB::table('members')-> where ('district', '=', [$request->search])
                                     -> orwhere ('enrolled_by', '=', [$request->search])
                                     ->get();

        return view('memberssearch')->with('finds',$finds);

    }

    public function agents(Request $request)
    {
        $finds = DB::table('agents')-> where ('district', '=', [$request->search])
                                    ->orwhere ('district_assigned', '=', [$request->search])
                                    ->orwhere ('fname', '=', [$request->search])
                                    ->orwhere ('lname', '=', [$request->search])
                                     -> orwhere ('number', '=', [$request->search])
                                     ->get();

        return view('agentsearch')->with('finds',$finds);

    }

    public function donation(Request $request)
    {
        $finds = DB::table('donations')-> where ('name', '=', [$request->search])
                                    ->orwhere ('district', '=', [$request->search])
                                    ->orwhere ('amount', '=', [$request->search])
                                    ->orwhere ('email', '=', [$request->search])
                                     ->get();

        return view('donationsearch')->with('finds',$finds);

    }

    public function agenthead(Request $request)
    {
        $finds = DB::table('agentheads')-> where ('district', '=', [$request->search])
                                    ->orwhere ('district_assigned', '=', [$request->search])
                                    ->orwhere ('fname', '=', [$request->search])
                                    ->orwhere ('lname', '=', [$request->search])
                                     -> orwhere ('number', '=', [$request->search])
                                     ->get();

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

        return view('agentheadsearch')->with('finds',$finds)->with('data1',$data1)->with('data2',$data2)->with('data3',$data3);
    }

}

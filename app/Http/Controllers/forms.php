<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent;
use App\agenthead;
use DB;

class forms extends Controller
{
    public function register()
    {
       $conn = mysqli_connect('localhost','root','','recess');
        $sql = "SELECT name from districts where Number_of_agents < 50";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $arr[$row["name"]]=$row;
             }
             $rand= array_rand($arr);
        $plus = "UPDATE districts set Number_of_agents=Number_of_agents+1 where name='$rand'";
        $result1 = mysqli_query($conn, $plus);

        $add = new agent();
        $add->fname = request('fname');
        $add->lname = request('lname');
        $add->number = request('telephone');
        $add->district = request('district');
        $add->district_assigned = $rand;
        $add->sex = request('gender');
        $add->signature = request('sign');
        $add->save();




        /*$agents = DB::select('SELECT * from agents group by district_assigned');
        foreach($agents as $agent)
        {
            $adding = new agenthead();
            $adding->agentid = $agent->agentid;
            $adding->fname = $agent->fname;
            $adding->lname = $agent->lname;
            $adding->number = $agent->number;
            $adding->district = $agent->district;
            $adding->date = $agent->date;
            $adding->sex = $agent->sex;
            $adding->signature = $agent->signature;
            $adding->district_assigned = $agent->district_assigned;
            $adding->save();*/
           /* DB::table('agentheads')->insert(['fname'=>$agent->fname,
            'lname'=>$agent->lname,
            'number'=>$agent->number,
            'district'=>$agent->district,
            'date'=>$agent->date,
            'sex'=>$agent->sex,
            'signature'=>$agent->signature,
            'district_assigned'=>$agent->district_assigned])*/
        //}

        return redirect('agentslist')->with('success', 'DATA ADDED');


        }

    }

}

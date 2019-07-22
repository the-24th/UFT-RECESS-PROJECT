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
        $agent = DB::select('select * from agents');
        $district = DB::select('select * from districts');
        compact('district');
        compact('agent');
        foreach($district as $dist);
        foreach($agent as $agen);

        while($dist->Number_of_agents < 50){

            $agen->district_assigned = $dist->name;
            $res = mysqli_query($conn, $agen->district_assigned);
            $data = mysqli_fetch_array($res);
            $dist->Number_of_agents++;
            $add = new agent();
            $add->fname = request('fname');
            $add->lname = request('lname');
            $add->number = request('telephone');
            $add->district = request('district');
            $add->district_assigned = $data;
            $add->sex = request('gender');
            $add->signature = request('sign');
            $add->save();
            return redirect('agentslist')->with('success', 'DATA ADDED');
        };




       $conn = mysqli_connect('localhost','root','','recess');
        $sql = "SELECT name from districts where Number_of_agents < 10";
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

        $add->date = request('date');

        $add->district_assigned = $rand;
        $add->sex = request('gender');
        $add->signature = request('sign');
        $add->save();

        return redirect('agentslist')->with('success', 'DATA ADDED');

    }

}

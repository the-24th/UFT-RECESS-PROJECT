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
        $sql = "SELECT name from districts where Number_of_agents < 10";

        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            foreach($row as $ro)
            $min= DB::select("SELECT MIN(Number_of_agents) as min from districts where Number_of_agents<10");
        foreach($min as $mi)
            $district= DB::select("SELECT name as name from districts where Number_of_agents= $mi->min");
        foreach($district as $dist)
            $arr[$dist->name]=$row;
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

        return redirect('agentslist')->with('success', 'REGISTERED');
        mysqli_close($conn);

    }

}

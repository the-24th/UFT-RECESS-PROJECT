<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agent;
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




    }

}

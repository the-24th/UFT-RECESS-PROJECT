<?php

namespace App\Http\Controllers;
use App\HighestEnrollmentDistrict;
use DB;

use Illuminate\Http\Request;

class payment extends Controller
{

        public function pays(){
            if(date("d")==1){
            $conn = mysqli_connect("localhost", "root", "", "recess");

            $sql1 = "SELECT count(agentid) as 'agentnumber' from agents";
            $result1 = mysqli_query($conn, $sql1);
            $data1 = mysqli_fetch_array($result1);
            $numberofagents = $data1['agentnumber'];

            $sql2 = "SELECT max(members_enrolled) as highest from districts";
            $result2 = mysqli_query($conn, $sql2);
            $highest = mysqli_fetch_array($result2);
            $highestenrollment = $highest['highest'];

            $sql3 = "SELECT name from districts where members_enrolled=$highestenrollment";
            $result3 = mysqli_query($conn, $sql3);
            $data3 = mysqli_fetch_array($result3);
            $nameofhighest = $data3['name'];

            $sql4 = "SELECT count(agentid) as 'highagent' from agents where district_assigned= '$nameofhighest'";
            $result4 = mysqli_query($conn, $sql4);
            $data4 = mysqli_fetch_array($result4);
            $highagent= $data4['highagent'];

            $normalagents=$numberofagents - $highagent;

            $sql5 = "SELECT count(agentid) as 'NAH' from agentheads where district_assigned != '$nameofhighest'";
            $result5 = mysqli_query($conn, $sql5);
            $data5 = mysqli_fetch_array($result5);
            $m = $data5['NAH'];

            $n = $normalagents - $m;

            $sql6 = "SELECT count(agentid) as 'M' from agentheads where district_assigned = '$nameofhighest'";
            $result6 = mysqli_query($conn, $sql6);
            $data6 = mysqli_fetch_array($result6);
            $M = $data6['M'];

            $N = $highagent - $M;

            $sql7 = "SELECT sum(amount) as 'donation' from donations";
            $result7 = mysqli_query($conn, $sql7);
            $data7 = mysqli_fetch_array($result7);
            $amount = $data7['donation'];

            if($amount>2000000){
            $excess = $amount-2000000;

            $money = $excess/($n + (1.75*$m) + (3.5*$M) + (2*$N) + 0.5);

            DB::table('district_pay')->insert(
                ['Agentheadpay'=>1.75*$money, 'Agentspay'=>$money, 'Administrator_pay'=>0.5*$money]
            );

            DB::table('highest_enrollment_districts')->insert(
                ['districtname'=>$nameofhighest,'Agenthead_pay'=>3.5*$money, 'Agents_pay'=>2*$money]
            );
            $payments = DB::table('highest_enrollment_districts')
            ->join('district_pay', 'highest_enrollment_districts.id', '=', 'district_pay.id')
            ->get();

        return view('pay')->with('payments',$payments);
        }
            else {

                return redirect('but')->with('failure', 'Not enough funds');
            }
        }
        else
        {
          return redirect('but')->with('failure', 'Month has not yet ended');  
        }
        mysqli_close($conn);

        }
}

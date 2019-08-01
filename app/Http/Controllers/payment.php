<?php

namespace App\Http\Controllers;
use App\HighestEnrollmentDistrict;
use DB;

use Illuminate\Http\Request;

class payment extends Controller
{

        public function pays(){
            if(date("d")==1){
            $conn = mysqli_connect('localhost','root','','recess') or die('couldnt connect'.mysqli_error());

            $sql7 = "SELECT sum(amount) as 'donation' from donations";
            $result7 = mysqli_query($conn, $sql7);
            $data7 = mysqli_fetch_array($result7);
            $amount = $data7['donation'];

            if($amount>2000000){
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

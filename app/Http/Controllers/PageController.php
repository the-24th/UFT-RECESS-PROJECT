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

        public function editagent($agentid)
    {
        //$agent = agent::find($agentid);
        $agent = DB::select("select * from agents where agentid=?", [$agentid]);
        return view('layouts.agentedit', ['agent'=>$agent]);
    }


          public function updateagent(Request $request, $agentid)
    {
        //$agent = agent::find($agentid);

        $agent_fname = $request->input('fname');
        $agent_lname = $request->input('lname');
        $agent_number = $request->input('telephone');
        $agent_district = $request->input('district');
        $agent_date = $request->input('date');
        $agent_district_assigned = $request->input('district_assigned');
        $agent_sex = $request->input('gender');
        $agent_signature = $request->input('sign');
        //$agent->save();
        DB::update("update agents set fname=?, lname=?, number=?, district=?, date=?, district_assigned=?, sex=?, signature=? where agentid=?", [$agent_fname, $agent_lname, $agent_number, $agent_district, $agent_date, $agent_district_assigned, $agent_sex, $agent_signature, $agentid]);
        return redirect('agentslist')->with('success', 'Data Updated');
    }

    public function deleteagent($agentid)
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
       mysqli_close($conn); 

    }

     public function editagenthead($agentid)
    {
        //$agent = agent::find($agentid);
        $agent = DB::select("select * from agentheads where agentid=?", [$agentid]);
        return view('layouts.agentheadedit', ['agent'=>$agent]);
    }


          public function updateagenthead(Request $request, $agentid)
    {
        //$agent = agent::find($agentid);

        $agent_fname = $request->input('fname');
        $agent_lname = $request->input('lname');
        $agent_number = $request->input('telephone');
        $agent_district = $request->input('district');
        $agent_date = $request->input('date');
        $agent_district_assigned = $request->input('district_assigned');
        $agent_sex = $request->input('gender');
        $agent_signature = $request->input('sign');
        //$agent->save();
        DB::update("update agentheads set fname=?, lname=?, number=?, district=?, date=?, district_assigned=?, sex=?, signature=? where agentid=?", [$agent_fname, $agent_lname, $agent_number, $agent_district, $agent_date, $agent_district_assigned, $agent_sex, $agent_signature, $agentid]);
        return redirect('agenthead')->with('success', 'Data Updated');
    }

    public function deleteagenthead($agentid)
    {
        $conn = mysqli_connect('localhost','root','','recess');
        $sql = "SELECT * from agentheads where agentid= $agentid";
        $result1 = mysqli_query($conn, $sql);
        $data1 = mysqli_fetch_array($result1);
        $district_assigned = $data1['district_assigned'];
        $minus = "UPDATE districts set Number_of_agents=Number_of_agents-1 where name='$district_assigned'";
        $result1 = mysqli_query($conn, $minus);
        DB::table('agentheads')->where('agentid',$agentid)->delete();


       return redirect('agenthead')->with('success', 'Deleted');   
       mysqli_close($conn);

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



        $agents = DB::select("SELECT * from agents where district_assigned ='$district' and fname!='$fname'");

        return view('tree')->with('fname', $fname)->with('lname', $lname)->with('agents', $agents)->with('district', $district);

        mysqli_close($conn);

    }

    public function roll(){
        return view('enroll');
    }

     public function editmember($id)
    {
        //$agent = agent::find($agentid);
        $mem = DB::select("select * from members where id=?", [$id]);
        return view('layouts.memberedit', ['mem'=>$mem]);
    }


          public function updatemember(Request $request, $id)
    {
        //$agent = agent::find($agentid);
        $mem_name = $request->input('name');
        $mem_gender = $request->input('gender');
        $mem_district = $request->input('district');
        $mem_date_of_enrollment = $request->input('date_of_enrollment');
        $mem_enrolled_by = $request->input('enrolled_by');
        $mem_recommender = $request->input('recommender');
                //$agent->save();
        DB::update("update members set name=?, gender=?, district=?, date_of_enrollment=?, enrolled_by=?, recommender=? where id=?", [$mem_name, $mem_gender, $mem_district, $mem_date_of_enrollment, $mem_enrolled_by, $mem_recommender, $id]);
        return redirect('members')->with('success', 'Data Updated');
    }

    public function deletemember($id)
    {
        $conn = mysqli_connect('localhost','root','','recess');
        $sql = "SELECT * from members where id= $id";
        $result1 = mysqli_query($conn, $sql);
        $data1 = mysqli_fetch_array($result1);
        $district = $data1['district'];
        $minus = "UPDATE districts set members_enrolled=members_enrolled-1 where name='$district'";
        $result1 = mysqli_query($conn, $minus);
        DB::table('members')->where('id',$id)->delete();


       return redirect('members')->with('success', 'Deleted');  
       mysqli_close($conn); 

    }

    public function mon(){
        return view('moneyregister');
    }

    public function up(){
        $conn = mysqli_connect('localhost','root','','recess');
        $sql = "SELECT * from members";
        $result = mysqli_query($conn, $sql);
        $names = array();
        $counter = 0;
        $number = DB::select("SELECT count(id) as 'total' from members");
        foreach ($number as $numeral) {
            $tots = $numeral->total;
        }

        while($names[] = mysqli_fetch_array($result))
        {
            if(++$counter==$tots)
                {
                    $length = count($names);
                    $n = 0;
                    for($n=0; $n<$length; $n++)
                    {
                        if($n==0)
                        {
                         $name = $names[$n]['name'];
                         $get = "SELECT count(id) as 'total' from members where recommender='$name'";
                         $result1 = mysqli_query($conn, $get);
                         $data1 = mysqli_fetch_array($result1);
                         if($data1['total']>=40)
                         {
                            $data2 = DB::select("SELECT * from members where name='$name'");
                            return view('upgrade')->with('data2',$data2);
                         }
                         else continue;

                        }
                        else if($n==1)
                        {
                          $name = $names[$n]['name'];
                         $get = "SELECT count(id) as 'total' from members where recommender='$name'";
                         $result1 = mysqli_query($conn, $get);
                         $data1 = mysqli_fetch_array($result1);
                         if($data1['total']>=40)
                         {
                            $data2 = DB::select("SELECT * from members where name='$name'");
                            return view('upgrade')->with('data2',$data2);
                         }
                         else continue;
                        }
                        else if($n==2)
                        {
                          $name = $names[$n]['name'];
                         $get = "SELECT count(id) as 'total' from members where recommender='$name'";
                         $result1 = mysqli_query($conn, $get);
                         $data1 = mysqli_fetch_array($result1);
                         if($data1['total']>=40)
                         {
                            $data2 = DB::select("SELECT * from members where name='$name'");
                            return view('upgrade')->with('data2',$data2);
                         }
                         else continue;
                        }
                        else if($n==3)
                        {
                          $name = $names[$n]['name'];
                         $get = "SELECT count(id) as 'total' from members where recommender='$name'";
                         $result1 = mysqli_query($conn, $get);
                         $data1 = mysqli_fetch_array($result1);
                         if($data1['total']>=40)
                         {
                            $data2 = DB::select("SELECT * from members where name='$name'");
                            return view('upgrade')->with('data2',$data2);
                         }
                         else continue;
                        }
                        else if($n==4)
                        {
                          $name = $names[$n]['name'];
                         $get = "SELECT count(id) as 'total' from members where recommender='$name'";
                         $result1 = mysqli_query($conn, $get);
                         $data1 = mysqli_fetch_array($result1);
                         if($data1['total']>=40)
                         {
                            $data2 = DB::select("SELECT * from members where name='$name'");
                            return view('upgrade')->with('data2',$data2);
                         }
                         else continue;
                        }
                        else if($n==5)
                        {
                          $name = $names[$n]['name'];
                         $get = "SELECT count(id) as 'total' from members where recommender='$name'";
                         $result1 = mysqli_query($conn, $get);
                         $data1 = mysqli_fetch_array($result1);
                         if($data1['total']>=40)
                         {
                            $data2 = DB::select("SELECT * from members where name='$name'");
                            return view('upgrade')->with('data2',$data2);
                         }
                         else continue;
                        }
                        else return redirect('home')->with('failure', 'No Recommendations Available');
                    }

                }
        }
        mysqli_close($conn);
    }

    public function edittreasure($id)
    {
        $donor = DB::select("select * from donations where id=?", [$id]);
        return view('layouts.treasureedit', ['donor'=>$donor]);
    }

    public function upgrading($id)
    {
        $data = DB::select("select * from members where id=?", [$id]);
        DB::table('members')->where('id', '=', $id)->delete();
        return view('layouts.upgrading', ['data'=>$data]);
    }

          public function updatetreasure(Request $request, $id)
    {
        $donor_name = $request->input('name');
        $donor_district = $request->input('district');
        $donor_Telephone_number = $request->input('Telephone_number');
        $donor_email = $request->input('email');
        $donor_amount = $request->input('amount');
        $donor_date = $request->input('date');
        DB::update("update donations set name=?, district=?, Telephone_number=?, email=?, amount=?, date=? where id=?", [$donor_name, $donor_district, $donor_Telephone_number, $donor_email, $donor_amount, $donor_date, $id]);
        return redirect('tre')->with('success', 'Data Updated');
    }

    public function deletetreasure($id)
    {

        DB::table('donations')->where('id',$id)->delete();

       return redirect('tre')->with('success', 'Deleted');
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
        $payments = DB::table('highest_enrollment_districts')
            ->join('district_pay', 'highest_enrollment_districts.id', '=', 'district_pay.id')
            ->get();

        return view('pay')->with('payments',$payments);
    }

    public function money(){
        $donors = DB::select('select * from donations');
        return view('tre', compact('donors'));
    }

    public function head()
    {
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
        mysqli_close($conn);
    }

    public function mem()
    {
      $mems= DB::select('select * from members');
        return view('members', compact('mems'));
    }


}


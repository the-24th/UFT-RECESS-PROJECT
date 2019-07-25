<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class donationgraph extends Controller
{
    public function draw()
    {
    	$connect = mysqli_connect("localhost", "root", "", "recess");
		$query = "SELECT * FROM donations";
		$result = mysqli_query($connect, $query);
		$chart_data = '';
		while($row = mysqli_fetch_array($result))
		{
 			$chart_data .= "{ name:'".$row["name"]."', amount:".$row["amount"]."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
    }

     public function drawwhere(Request $request)
    {
    	//$connect = mysqli_connect("localhost", "root", "", "recess");
		//$query = "SELECT * FROM donations where MONTH(date)=$POST[month']";
		$outs = $request->input('search');
		if($outs == 'January' || $outs == 'january' || $outs == 1){
		$finds = DB::table('donations')-> whereMonth('date', '1')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'February' || $outs == 'february' || $outs == 2){
		$finds = DB::table('donations')-> whereMonth('date', '2')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'March' || $outs == 'march' || $outs == 3){
		$finds = DB::table('donations')-> whereMonth('date', '3')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'April' || $outs == 'april' || $outs == 4){
		$finds = DB::table('donations')-> whereMonth('date', '4')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'May' || $outs == 'may' || $outs == 5){
		$finds = DB::table('donations')-> whereMonth('date', '5')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'June' || $outs == 'june' || $outs == 6){
        $finds = DB::table('donations')-> whereMonth('date', '6')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'July' || $outs == 'july' || $outs == 7){
		$finds = DB::table('donations')-> whereMonth('date', '7')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'August' || $outs == 'august' || $outs == 8){
		$finds = DB::table('donations')-> whereMonth('date', '8')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'September' || $outs == 'september' || $outs == 9){
		$finds = DB::table('donations')-> whereMonth('date', '9')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'October' || $outs == 'october' || $outs == 10){
		$finds = DB::table('donations')-> whereMonth('date', '10')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'November' || $outs == 'november' || $outs == 11){
		$finds = DB::table('donations')-> whereMonth('date', '11')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else if($outs == 'December' || $outs == 'december' || $outs == 12){
		$finds = DB::table('donations')-> whereMonth('date', '12')
                                     ->get();

		//$result = mysqli_query($connect, $query);
		$chart_data = '';
		//while($row = mysqli_fetch_array($result))
		foreach($finds as $find)
		{
 			$chart_data .= "{ name:'".$find->name."', amount:".$find->amount."}, ";
		}
		$chart_data = substr($chart_data, 0, -2);

		return view('donation')->with('chart_data',$chart_data);
		}
		else
		{
			$conn = mysqli_connect("localhost", "root", "", "recess");
			//$finds = DB::table('donations')->where('name', '=', [$outs])->get();
			$month = "SELECT amount, MONTHNAME(date) as monthname from donations where name='$outs'";
			$result2 = mysqli_query($conn, $month);
			$chart_data = '';
			while($data2 = mysqli_fetch_array($result2))
			{
				$chart_data .= "{ monthname:'".$data2['monthname']."', amount:".$data2['amount']."}, ";
			}
			$chart_data = substr($chart_data, 0, -2);

		return view('wellwisher')->with('chart_data',$chart_data)->with('outs',$outs);


		}
    }

    public function funding()
    {
    	$conn = mysqli_connect("localhost", "root", "", "recess");
			//$finds = DB::table('donations')->where('name', '=', [$outs])->get();
			$month = "SELECT sum(amount) as amount, MONTHNAME(date) as monthname from donations group by monthname ORDER BY date" ;
			$result2 = mysqli_query($conn, $month);
			$chart_data = '';
			while($data2 = mysqli_fetch_array($result2))
			{
				$chart_data .= "{ monthname:'".$data2['monthname']."', amount:".$data2['amount']."}, ";
			}
			$chart_data = substr($chart_data, 0, -2);


		return view('funding')->with('chart_data',$chart_data);
    }

    public function roll()
    {
        $chart_data = '';
       $names = DB::select("SELECT MONTH(date_of_enrollment) as month from members group by date_of_enrollment");
       foreach($names as $name)
       {
        if($name->month==1)
        {
            DB::select("SELECT count(id) as ones FROM members where month(date_of_enrollment)=1");
            continue;
        }
         else
            $number =DB::select("SELECT count(id) as people from members where month(date_of_enrollment)=$name->month");
            $man=DB::select("SELECT MONTHNAME(date_of_enrollment) as girls from members where month(date_of_enrollment)=$name->month");
            foreach($number as $num){
               // if($name->month==1){
                    //continue;
                }
                //else {
                    $previous= DB::select("SELECT count(id) as be from members where month(date_of_enrollment)=$name->month-1");
                    
               // }
                foreach($previous as $prev)
                	if($prev->be==0)
                	{
                		$change=0;
                		continue;
                	}
                	else
                	{
                		$change=(($num->people-$prev->be)/$prev->be)*100;
                	}
          
                foreach($man as $ma){
       // echo "$name->month, $num->people, $prev->be, $change <br/>";
       $chart_data .= "{ month:'".$ma->girls."', amount:".$change."}, ";
                }
            }
           
       
       $chart_data = substr($chart_data, 0, -2);


		return view('enroll')->with('chart_data',$chart_data);
}
}

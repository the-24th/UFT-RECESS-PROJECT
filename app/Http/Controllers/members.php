<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class members extends Controller
{
    public function mem()
    {
		$conn = mysqli_connect('localhost','root','','recess') or die('couldnt connect'.mysqli_error());

		//Kampala
		if(file_exists("/opt/lampp/htdocs/Kampala.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Kampala.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Kampala'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'KLA-'.$counter;
						//$counter++;
						$district = "Kampala";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KLA-'.$counter;
					$district = "Kampala";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'KLA-'.$counter;
					$district = "Kampala";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Kampala.txt";
			file_put_contents($log_file, '');
		}

		//Kitgum
		if(file_exists("/opt/lampp/htdocs/Kitgum.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Kitgum.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Kitgum'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'KIT-'.$counter;
						//$counter++;
						$district = "Kitgum";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KIT-'.$counter;
					$district = "Kitgum";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'KIT-'.$counter;
					$district = "Kitgum";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Kitgum.txt";
			file_put_contents($log_file, '');
		}

		//Bushenyi
		if(file_exists("/opt/lampp/htdocs/Bushenyi.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Bushenyi.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Bushenyi'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'BSH-'.$counter;
						//$counter++;
						$district = "Bushenyi";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'BSH-'.$counter;
					$district = "Bushenyi";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'BSH-'.$counter;
					$district = "Bushenyi";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Bushenyi.txt";
			file_put_contents($log_file, '');
		}

		//Mbarara
		if(file_exists("/opt/lampp/htdocs/Mbarara.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Mbarara.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Mbarara'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'MBRA-'.$counter;
						//$counter++;
						$district = "Mbarara";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'MBRA-'.$counter;
					$district = "Mbarara";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'MBRA-'.$counter;
					$district = "Mbarara";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Mbarara.txt";
			file_put_contents($log_file, '');
		}

		//Gulu
		if(file_exists("/opt/lampp/htdocs/Gulu.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Gulu.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Gulu'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'GUL-'.$counter;
						//$counter++;
						$district = "Gulu";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'GUL-'.$counter;
					$district = "Gulu";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'GUL-'.$counter;
					$district = "Gulu";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Gulu.txt";
			file_put_contents($log_file, '');
		}

		//Kasese
		if(file_exists("/opt/lampp/htdocs/Kasese.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Kasese.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Kasese'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'KAS-'.$counter;
						//$counter++;
						$district = "Kasese";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KAS-'.$counter;
					$district = "Kasese";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'KAS-'.$counter;
					$district = "Kasese";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Kasese.txt";
			file_put_contents($log_file, '');
		}

		//Koboko
		if(file_exists("/opt/lampp/htdocs/Koboko.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Koboko.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Koboko'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'KOB-'.$counter;
						//$counter++;
						$district = "Koboko";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KOB-'.$counter;
					$district = "Koboko";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'KOB-'.$counter;
					$district = "Koboko";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Koboko.txt";
			file_put_contents($log_file, '');
		}

		//Mbale
		if(file_exists("/opt/lampp/htdocs/Mbale.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Mbale.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbers = DB::select("select members_enrolled from districts where name='Mbale'");
				foreach($numbers as $number)
				$counter = $number->members_enrolled+1;

				if(count($carray)==6)
				{
					list($name1,$name2,$gender,$date,$enrolledby,$recommender) = $carray;
					if($counter<100)
					{
						$id = 'MBA-'.$counter;
						//$counter++;
						$district = "Mbale";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$enrolledby','$recommender')";
						DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
						$result = mysqli_query($conn,$sql);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==7)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'MBA-'.$counter;
					$district = "Mbale";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
			else if(count($carray)==8)
			{
				list($name1,$name2,$gender,$date,$enrolledby,$e2,$recommender,$r2) = $carray;
				if($counter<100)
				{
					$id = 'MBA-'.$counter;
					$district = "Mbale";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,enrolled_by,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$enrolledby $e2','$recommender $r2')";
							DB::update("UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'");
					$result = mysqli_query($conn,$sql);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Mbale.txt";
			file_put_contents($log_file, '');
		}

        $mems= DB::select('select * from members');
        return view('members', compact('mems'));
    }
}

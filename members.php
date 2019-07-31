<?php

    	
		$conn = mysqli_connect('localhost','root','','recess') or die('couldnt connect'.mysqli_error());

		//Kampala
		if(file_exists("/opt/lampp/htdocs/Recess/Kampala.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Kampala.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "SELECT members_enrolled from districts where name='Kampala'";
				$resulting = mysqli_query($conn,$numbering);
				while($number = mysqli_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'KLA-'.$counter;
						//$counter++;
						$district = "Kampala";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysqli_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
				{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KLA-'.$counter;
					$district = "Kampala";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
		}
		fclose($file);
			$log_file = "/opt/lampp/htdocs/Recess/Kampala.txt";
			file_put_contents($log_file, '');
	}
			
		//Kitgum
		if(file_exists("/opt/lampp/htdocs/Recess/Kitgum.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Kitgum.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "select members_enrolled from districts where name='Kitgum'";
				$resulting = mysqli_query($conn,$numbering);
				while($number = mysqli_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'KIT-'.$counter;
						//$counter++;
						$district = "Kitgum";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysqli_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
			{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KIT-'.$counter;
					$district = "Kitgum";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
		}
		fclose($file);
			$log_file = "/opt/lampp/htdocs/Recess/Kitgum.txt";
			file_put_contents($log_file, '');
	}

		//Bushenyi
		if(file_exists("/opt/lampp/htdocs/Recess/Bushenyi.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Bushenyi.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "SELECT members_enrolled from districts where name='Bushenyi'";
				$resulting = mysqli_query($conn,$numbering);
				while($number = mysqli_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'BSH-'.$counter;
						//$counter++;
						$district = "Bushenyi";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysql_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
			{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'BSH-'.$counter;
					$district = "Bushenyi";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
		}
		fclose($file);
			$log_file = "/opt/lampp/htdocs/Recess/Bushenyi.txt";
			file_put_contents($log_file, '');
	}

		//Mbarara
		if(file_exists("/opt/lampp/htdocs/Recess/Mbarara.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Mbarara.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "SELECT members_enrolled from districts where name='Mbarara'";
				$resulting = mysqli_query($conn,$numbering);
				while($number = mysqli_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'MBRA-'.$counter;
						//$counter++;
						$district = "Mbarara";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysqli_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
			{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'MBRA-'.$counter;
					$district = "Mbarara";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
		}
		fclose($file);
			$log_file = "/opt/lampp/htdocs/Recess/Mbarara.txt";
			file_put_contents($log_file, '');
	}

		//Gulu
		if(file_exists("/opt/lampp/htdocs/Recess/Gulu.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Gulu.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "SELECT members_enrolled from districts where name='Gulu'";
				$resulting = mysqli_query($conn,$numbering);
				while($number = mysqli_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'GUL-'.$counter;
						//$counter++;
						$district = "Gulu";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysqli_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
			{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'GUL-'.$counter;
					$district = "Gulu";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
		}
		fclose($file);
			$log_file = "/opt/lampp/htdocs/Recess/Gulu.txt";
			file_put_contents($log_file, '');
	}

		//Kasese
		if(file_exists("/opt/lampp/htdocs/Recess/Kasese.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Kasese.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "select members_enrolled from districts where name='Kasese'";
				$resulting = mysqli_query($conn,$numbering);
				while($number = mysql_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'KAS-'.$counter;
						//$counter++;
						$district = "Kasese";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysqli_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
			{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KAS-'.$counter;
					$district = "Kasese";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
		}
		fclose($file);
			$log_file = "/opt/lampp/htdocs/Recess/Kasese.txt";
			file_put_contents($log_file, '');
	}

		//Koboko
		if(file_exists("/opt/lampp/htdocs/Recess/Koboko.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Koboko.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "SELECT members_enrolled from districts where name='Koboko'";
				$resulting = mysql_query($conn,$numbering);
				while($number = mysqli_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'KOB-'.$counter;
						//$counter++;
						$district = "Koboko";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysqli_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
			{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'KOB-'.$counter;
					$district = "Koboko";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
		}
			fclose($file);
			$log_file = "/opt/lampp/htdocsRecess/Koboko.txt";
			file_put_contents($log_file, '');
	}

		//Mbale
		if(file_exists("/opt/lampp/htdocs/Recess/Mbale.txt"))
		{
			$file = fopen("/opt/lampp/htdocs/Recess/Mbale.txt","r");
			while(!feof($file))
			{
				$content = fgets($file);
				$carray = explode(" ", $content);
				$numbering = "SELECT members_enrolled from districts where name='Mbale'";
				$resulting = mysqli_query($conn,$numbering);
				while($number = mysqli_fetch_array($resulting))
				{
					$counter = $number['members_enrolled']+1;
				}
				

				if(count($carray)==6)
				{
					list($name1,$name2,$date,$gender,$recommender1,$recommender2) = $carray;
					if($counter<100)
					{
						$id = 'MBA-'.$counter;
						//$counter++;
						$district = "Mbale";
						$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
						values('$id','$name1 $name2','$gender','$district','$date','$recommender1 $recommender2')";
						$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
						$result = mysqli_query($conn,$sql);
						$updater = mysqli_query($conn,$update);
						if (!$result) 
						{
				    		die('Could not query table:'.mysqli_error($conn));
						}
					}
				}
				else if(count($carray)==5)
			{
				list($name1,$name2,$date,$gender,$recommender) = $carray;
				if($counter<100)
				{
					$id = 'MBA-'.$counter;
					$district = "Mbale";
					$sql = "INSERT into members (member_id,name,gender,district,date_of_enrollment,recommender)
							values('$id','$name1 $name2','$gender','$district','$date','$recommender')";
					$update = "UPDATE districts set members_enrolled=members_enrolled+1 where name='$district'";
					$result = mysqli_query($conn,$sql);
					$updater = mysqli_query($conn,$update);
					if (!$result) {
					    die('Could not query table:'.mysqli_error($conn));
									}
				}
				
			}
				
			}
			fclose($file);
			$log_file = "/opt/lampp/htdocs/Recess/Mbale.txt";
			file_put_contents($log_file, '');
		}     
?>

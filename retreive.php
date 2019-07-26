<?php
	
$conn = mysqli_connect('localhost','root','','recess') or die('couldnt connect'.mysqli_error());

//paymentnormal
$file = fopen("/opt/lampp/htdocs/Recess (copy)/paymentnormal.txt","w");
if ($result = $conn->query("SELECT * FROM district_pay"))
{
  while ($row = $result->fetch_assoc())
  {
    fputcsv($file, $row);
  }
  $result->close();
}
fclose($file);

//paymenthigh
$file = fopen("/opt/lampp/htdocs/Recess (copy)/paymenthigh.txt","w");
if ($result = $conn->query("SELECT * FROM highest_enrollment_districts"))
{
  while ($row = $result->fetch_assoc())
  {
    fputcsv($file, $row);
  }
  $result->close();
}
fclose($file);

//members
$file = fopen("/opt/lampp/htdocs/Recess (copy)/members.txt","w");
if ($result = $conn->query("SELECT * FROM members"))
{
  while ($row = $result->fetch_assoc())
  {
    fputcsv($file, $row);
  }
  $result->close();
}
fclose($file);

?>
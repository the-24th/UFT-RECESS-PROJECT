<?php
	
$conn = mysqli_connect('localhost','root','','recess') or die('couldnt connect'.mysqli_error());

//payment
$file = fopen("/opt/lampp/htdocs/payment.txt","w");
if ($result = $conn->query("SELECT * FROM agentpay"))
{
  while ($row = $result->fetch_assoc())
  {
    fputcsv($file, $row);
  }
  $result->close();
}
fclose($file);

//members
$file = fopen("/opt/lampp/htdocs/members.txt","w");
if ($result = $conn->query("SELECT * FROM members"))
{
  while ($row = $result->fetch_assoc())
  {
    fputcsv($file, $row);
  }
  $result->close();
}
fclose($file);

//agents
$file = fopen("/opt/lampp/htdocs/agents.txt","w");
if ($result = $conn->query("SELECT fname, lname FROM agents"))
{
  while ($row = $result->fetch_assoc())
  {
    fputcsv($file, $row);
  }
  $result->close();
}
fclose($file);

?>
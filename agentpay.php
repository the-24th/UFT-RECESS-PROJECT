<?php


        $conn = mysqli_connect('localhost','root','','recess');

        $sql = "SELECT * from highest_enrollment_districts";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_array($result);
        $distname = $data['districtname'];
        $headhighmoney = $data['Agenthead_pay'];
        $agenthighmoney = $data['Agents_pay'];

        //agent heads from high enrollment
        $sql1 = "SELECT * from agentheads where district_assigned='$distname'";
        $result1 = mysqli_query($conn, $sql1);
        while($row1 = mysqli_fetch_array($result1))
        {
            $agentid1 = $row1['agentid'];
            $fname1 = $row1['fname'];
            $lname1 = $row1['lname'];
            $sex1 = $row1['sex'];
            $district1 = $row1['district'];
            $number1 = $row1['number'];
            $district_assigned1 = $row1['district_assigned'];
            $date1 = $row1['date'];
            $signature1 = $row1['signature'];
            $work1 = "INSERT into agentpay(agentid, fname, lname, sex, district, number,  district_assigned, date, signature, amount)
            values('$agentid1', '$fname1', '$lname1', '$sex1', '$district1', '$number1', '$district_assigned1', '$date1', '$signature1', '$headhighmoney')";
            mysqli_query($conn, $work1);
        }

        //agents from high enrollment
        $sql2 = "SELECT * from agents where district_assigned='$distname' and agentid!=$agentid1";
        $result2 = mysqli_query($conn, $sql2);
        while($row2 = mysqli_fetch_array($result2))
        {
            $agentid2 = $row2['agentid'];
            $fname2 = $row2['fname'];
            $lname2 = $row2['lname'];
            $sex2 = $row2['sex'];
            $district2 = $row2['district'];
            $number2 = $row2['number'];
            $district_assigned2 = $row2['district_assigned'];
            $date2 = $row2['date'];
            $signature2 = $row2['signature'];
            $work2 = "INSERT into agentpay(agentid, fname, lname, sex, district, number,  district_assigned, date, signature, amount)
            values('$agentid2', '$fname2', '$lname2', '$sex2', '$district2', '$number2', '$district_assigned2', '$date2', '$signature2', '$agenthighmoney')";
            mysqli_query($conn, $work2);
        }

        $get = "SELECT * from district_pay";
        $got = mysqli_query($conn,$get);
        $gott = mysqli_fetch_array($got);
        $headmoney = $gott['Agentheadpay'];
        $agentmoney = $gott['Agentspay'];

        //agenthead from normal
        $sql3 = "SELECT * from agentheads where district_assigned!='$distname'";
        $result3 = mysqli_query($conn,$sql3);
        while($row3 = mysqli_fetch_array($result3))
        {
            $agentid3 = $row3['agentid'];
            $fname3 = $row3['fname'];
            $lname3 = $row3['lname'];
            $sex3 = $row3['sex'];
            $district3 = $row3['district'];
            $number3 = $row3['number'];
            $district_assigned3 = $row3['district_assigned'];
            $date3 = $row3['date'];
            $signature3 = $row3['signature'];
            $work3 = "INSERT into agentpay(agentid, fname, lname, sex, district, number,  district_assigned, date, signature, amount)
            values('$agentid3', '$fname3', '$lname3', '$sex3', '$district3', '$number3', '$district_assigned3', '$date3', '$signature3', '$headmoney')";
            mysqli_query($conn, $work3);
        }

        $sql3 = "SELECT * from agents where district_assigned!='$distname' and agentid!=$agentid3";
        $result4 = mysqli_query($conn,$sql3);
        while ($row4 = mysqli_fetch_array($result4)) 
        {
            $agentid4 = $row4['agentid'];
            $fname4 = $row4['fname'];
            $lname4 = $row4['lname'];
            $sex4 = $row4['sex'];
            $district4 = $row4['district'];
            $number4 = $row4['number'];
            $district_assigned4 = $row4['district_assigned'];
            $date4 = $row4['date'];
            $signature4 = $row4['signature'];
            $work4 = "INSERT into agentpay(agentid, fname, lname, sex, district, number,  district_assigned, date, signature, amount)
            values('$agentid4', '$fname4', '$lname4', '$sex4', '$district4', '$number4', '$district_assigned4', '$date4', '$signature4', '$agentmoney')";
            mysqli_query($conn, $work4);
        }


?>
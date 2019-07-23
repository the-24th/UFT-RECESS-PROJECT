@extends('layouts.adminhome')

@section('title', 'Enrolled members')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Graphs for data</title>
	<link rel="stylesheet" href="{{asset('//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css')}}">
  <script src="{{asset('//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js')}}"></script>
  <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
  <script src="{{asset('//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js')}}"></script>

</head>
<body>
	<br /><br />
    <div class="container" style="width:900px">

	<h2 style="align:center"><u>BAR GRAPH SHOWING VARIATION IN PERCENTAGE CHANGE IN ENROLLMENT PER MONTH.</u></h2>
   <br /><br />
   <div id="chart" style="color:black"></div>

	</div>


</body>
</html>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'monthname',
 parseTime: false,
 ykeys:['amount'],
 labels:['Amount'],
 hideHover:'auto',
 stacked:true
});
</script>
@endsection
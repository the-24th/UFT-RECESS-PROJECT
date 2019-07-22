@extends('layouts.adminhome')
@section('title', 'Donation')
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
	<div class="container" style=="width:900px">
	 <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <form method="post" action="/graphsearch">
                                        {{ csrf_field() }}
                                    <label>Display Donations from specific Month or Well-wisher:
                                        <p><input type="search" name="search" class="form-control form-control-sm" placeholder="Month or Well-wisher" aria-controls="bootstrap-data-table-export">
                                        <button type="submit" class="btn btn-primary btn-sm">Display</button></p>
                                    </label>
                                    </form>
                               <a href="/donation"><button type="submit" class="btn btn-primary btn-sm">Back</button></a>
                                </div>
	<h2 align="center"><u>BAR GRAPH SHOWING DONATIONS.</u> <br>
    @php
      echo $outs;
    @endphp
  </h2>
   <br /><br />
   <div id="chart"></div>
		
	</div>


</body>
</html>

<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'monthname',
 ykeys:['amount'],
 labels:['Amount'],
 hideHover:'auto',
 stacked:true
});
</script>
@endsection

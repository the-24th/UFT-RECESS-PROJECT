@extends('layouts.adminhome')
@section('title', 'Hierarchy')
@section('content')
<!-- <?php 
//index.php
$connect = mysqli_connect("localhost", "root", "", "recess");
$query = "SELECT * FROM agents";
$result = mysqli_query($connect, $query);
$names = '';
while($row = mysqli_fetch_array($result))
{
 $names .= "{ fname:'".$row["fname"]."'}, ";
}
$names = substr($names, 0, -2);
?> -->
<html>
  <head>
    <script type="text/javascript" src="{{asset('https://www.gstatic.com/charts/loader.js')}}"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{v:'@php echo $fname." ".$lname;@endphp', f:'@php echo $fname." ".$lname;@endphp<div style="color:red; font-style:italic">AGENT HEAD</div>'},
           '', 'THE AGENT HEAD'],
          @foreach($data1 as $data)
           ['{{@$data['fname']}}','@php echo $fname." ".$lname;@endphp', 'AGENT'],
          @endforeach
        ]);
       
          
         
       

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
      }
   </script>
    </head>
  <body>
  	 <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <form method="post" action="/archy">
                                        {{ csrf_field() }}
                                    <label>District to display:
                                        <p><input type="search" name="search" class="form-control form-control-sm" placeholder="District name" aria-controls="bootstrap-data-table-export">
                                        <button type="submit" class="btn btn-primary btn-sm">Display</button></p>
                                    </label>
                                    </form>
                                </div>
                                   <div class="container" style=="width:900px">
<h2 align="center"><u>HIERACHY CHART FOR THE AGENTS IN @php echo $district @endphp .</u></h2>
    <div id="chart_div"></div>
 
  </body>
</html>
@endsection
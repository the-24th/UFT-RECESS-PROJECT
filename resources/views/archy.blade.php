@extends('layouts.adminhome')
@section('title', 'Hierarchy')
@section('content')

 <div class="container" style=="width:900px">
 <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <form method="post" action="/tree">
                                        {{ csrf_field() }}
                                    <label><h2>PLEASE FILL IN THE DISTRICT YOU WOULD LIKE TO VIEW:                                        
                                    	<p><input type="search" name="search" class="form-control form-control-sm" placeholder="District name" aria-controls="bootstrap-data-table-export">
                                        <button type="submit" class="btn btn-primary btn-sm">Display</button></p>
                                    </h2></label>
                                    </form>
                                </div>
    <div id="chart_div"></div>
@endsection
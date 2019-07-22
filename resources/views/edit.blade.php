@extends('layouts.adminhome')
@section('title','Edit Button' )

@section('content')
First-name <input type="text" name="fname" id="first" style="background-color:white;border-radius:10px;padding:10px;"/><br/>

Last-name <input type="text" name="lname" id="last" style="background-color:white;border-radius:10px;padding:10px;"/><br><br>
Gender <input type="text" name="sex" id="pip" style="background-color:white;border-radius:10px;padding:10px;"/><br/><br>
District <input type="text" name="district" id="dist" style="background-color:white;border-radius:10px;padding:10px;"/><br/><br>
Phone Number <input type="text" name="number" id="no" style="background-color:white;border-radius:10px;padding:10px;"/><br/><br>
District assigned <input type="text" name="assign" id="ass" style="background-color:white;border-radius:10px;padding:10px;"/><br/><br>
<button class="btn btn-primary btn-sm" onclick="editRow();">EDIT AGENT DETAILS</button>

@endsection

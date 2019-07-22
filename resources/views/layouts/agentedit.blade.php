@extends('layouts.adminhome')
@section('title', 'Edit Agent')

@section('content')



<div class="card" align="center">



<div class="card">
        <div class="card-header"><strong>EDITING FORM</strong></div>
        <div class="card-body card-block">
            <form method="post" action="{{action('PageController@update', $agentid)}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group"><label for="first_name" class=" form-control-label"></label><input name="fname" type="text" id="company" value="{{$agent->fname}}" placeholder="Enter first name" required class="form-control"></div>
            <div class="form-group"><label for="company" class=" form-control-label"></label><input name="lname" type="text" id="company" value="{{$agent->lname}}" placeholder="Enter last name" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="telephone" type="text" id="city" value="{{$agent->number}}" placeholder="Enter a telephone number" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="district_assigned" type="text" id="city" value="{{$agent->district_assigned}}" placeholder="Enter a telephone number" required class="form-control"></div>
                        <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label"></label><input name="district" type="text" id="" value="{{$agent->district}}" placeholder="District Name" required class="form-control"></div>

                                    <div class="form-group"><label for="date" class=" form-control-label"></label><input name="date" type="text" id="" placeholder="Date" value="{{$agent->date}}" required class="form-control"></div>

                                     <div class="form-group"><label for="sex" class=" form-control-label"></label><input name="gender" type="text" id="" placeholder="Gender" value="{{$agent->sex}}" required class="form-control"></div>

                                    <div class="form-group"><label for="country" class=" form-control-label"></label><input name="sign" type="text" id="country" placeholder="Signature (single character) e.g B" value="{{$agent->signature}}" required class="form-control"></div>
                                    <button type="submit" class="btn" style="" >Edit</button>
                                    <button type="reset" class="btn">Refresh</button>
                                </form>
                                </div>
                                    </div>
                                </div>

                                </div>
                            </div>
@endsection


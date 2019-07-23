@extends('layouts.adminhome')
@section('title', 'Edit Agent head')

@section('content')



<div class="card" align="center">



<div class="card">
        <div class="card-header"><strong>EDITING FORM</strong></div>
        <div class="card-body card-block">
            <form method="post" action="/updateagenthead/{{ $agent[0]->agentid}}">
                {{ csrf_field() }}
                
            <div class="form-group"><label for="first_name" class=" form-control-label"></label><input name="fname" type="text" id="company" value="{{$agent[0]->fname}}" placeholder="Enter first name" required class="form-control"></div>
            <div class="form-group"><label for="company" class=" form-control-label"></label><input name="lname" type="text" id="company" value="{{$agent[0]->lname}}" placeholder="Enter last name" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="telephone" type="text" id="city" value="{{$agent[0]->number}}" placeholder="Enter a telephone number" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="district_assigned" type="text" id="city" value="{{$agent[0]->district_assigned}}" placeholder="Enter a telephone number" required class="form-control"></div>
                        <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label"></label><input name="district" type="text" id="" value="{{$agent[0]->district}}" placeholder="District Name" required class="form-control"></div>

                                    <div class="form-group"><label for="date" class=" form-control-label"></label><input name="date" type="text" id="" placeholder="Date (yyyy/MM/dd)" value="{{$agent[0]->date}}" required class="form-control"></div>

                                     <div class="form-group"><label for="sex" class=" form-control-label"></label><input name="gender" type="text" id="" placeholder="Gender" value="{{$agent[0]->sex}}" required class="form-control"></div>

                                    <div class="form-group"><label for="country" class=" form-control-label"></label><input name="sign" type="text" id="country" placeholder="Signature (single character) e.g B" value="{{$agent[0]->signature}}" required class="form-control"></div>
                                    <button type="submit" class="btn" style="" >Edit</button>
                                    <button type="reset" class="btn">Refresh</button>
                                </form>
                                </div>
                                    </div>
                                </div>

                                </div>
                            </div>
@endsection


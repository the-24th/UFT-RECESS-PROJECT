@extends('layouts.adminhome')
@section('title', 'Edit Member')

@section('content')



<div class="card" align="center">



<div class="card">
        <div class="card-header"><strong>EDITING FORM</strong></div>
        <div class="card-body card-block">
            <form method="post" action="/updatemember/{{ $mem[0]->id}}">
                {{ csrf_field() }}
                
            <div class="form-group"><label for="name" class=" form-control-label"></label><input name="name" type="text" id="company" value="{{$mem[0]->name}}" placeholder="Full-name" required class="form-control"></div>
            <div class="form-group"><label for="gender" class=" form-control-label"></label><input name="gender" type="text" id="company" value="{{$mem[0]->gender}}" placeholder="Gender" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="district" type="text" id="city" value="{{$mem[0]->district}}" placeholder="District" required class="form-control"></div>
            <div class="form-group"><label for="date" class=" form-control-label"></label><input name="date_of_enrollment" type="text" id="city" value="{{$mem[0]->date_of_enrollment}}" placeholder="Date_of_enrollment (yyyy/MM/dd)" required class="form-control"></div>
                        <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label"></label><input name="enrolled_by" type="text" id="" value="{{$mem[0]->enrolled_by}}" placeholder="Enrolled by" required class="form-control"></div>

                                    <div class="form-group"><label for="date" class=" form-control-label"></label><input name="recommendor" type="text" id="" placeholder="Recommendor" value="{{$mem[0]->recommendor}}" required class="form-control"></div>

                                    <button type="submit" class="btn" style="" >Edit</button>
                                    <button type="reset" class="btn">Refresh</button>
                                </form>
                                </div>
                                    </div>
                                </div>

                                </div>
                            </div>
@endsection


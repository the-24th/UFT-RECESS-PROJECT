@extends('layouts.adminhome')
@section('title', 'Edit Treasury')

@section('content')



<div class="card" align="center">



<div class="card">
        <div class="card-header"><strong>EDITING FORM</strong></div>
        <div class="card-body card-block">
            <form method="post" action="/updatetreasure/{{ $donor[0]->id}}">
                {{ csrf_field() }}
                
            <div class="form-group"><label for="name" class=" form-control-label"></label><input name="name" type="text" id="company" value="{{$donor[0]->name}}" placeholder="Full-name" required class="form-control"></div>
            <div class="form-group"><label for="company" class=" form-control-label"></label><input name="district" type="text" id="company" value="{{$donor[0]->district}}" placeholder="District of Residence" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="Telephone_number" type="text" id="city" value="{{$donor[0]->Telephone_number}}" placeholder="Enter telephone number" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="email" type="text" id="city" value="{{$donor[0]->email}}" placeholder="email address" required class="form-control"></div>
                        <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label"></label><input name="amount" type="text" id="" value="{{$donor[0]->amount}}" placeholder="Amount" required class="form-control"></div>

                                    <div class="form-group"><label for="date" class=" form-control-label"></label><input name="date" type="text" id="" placeholder="Date (yyyy/MM/dd)" value="{{$donor[0]->date}}" required class="form-control"></div>

                                    <button type="submit" class="btn" style="" >Edit</button>
                                    <button type="reset" class="btn">Refresh</button>
                                </form>
                                </div>
                                    </div>
                                </div>

                                </div>
                            </div>
@endsection


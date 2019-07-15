@extends('layouts.adminhome')
@section('title', 'Register Agent')

@section('content')



<div class="card">
        <div class="card-header"><strong>AGENT REGISTRATION FORM</strong></div>
        <div class="card-body card-block">
            <form method="post" action="/registeragent">



                {{ csrf_field() }}
            <div class="form-group"><label for="first_name" class=" form-control-label">First Name</label><input name="fname" type="text" id="company" placeholder="Enter first name" required class="form-control"></div>
            <div class="form-group"><label for="company" class=" form-control-label">Last Name</label><input name="lname" type="text" id="company" placeholder="Enter last name" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label">Telephone Number</label><input name="telephone" type="text" id="city" placeholder="Enter a telephone number" required class="form-control"></div>
                        <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">District of Residence</label><input name="district" type="text" id="" placeholder="District Name" required class="form-control"></div>

                                    <div class="form-group"><label for="date" class=" form-control-label">Gender</label><input name="gender" type="text" id="postal-code" placeholder="M/F" required class="form-control"></div>
                                    <div class="form-group"><label for="country" class=" form-control-label">Signature (single character)</label><input name="sign" type="text" id="country" placeholder="B" required class="form-control"></div>
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </form>
                                </div>
                                    </div>
                                </div>

                                </div>
                            </div>
@endsection


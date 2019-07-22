@extends('layouts.adminhome')
@section('title', 'Register Agent')

@section('content')



<div class="card" align="center">



<div class="card">
        <div class="card-header"><strong>AGENT REGISTRATION FORM</strong></div>
        <div class="card-body card-block">
            <form method="post" action="/registeragent">



                {{ csrf_field() }}
            <div class="form-group"><label for="first_name" class=" form-control-label"></label><input name="fname" type="text" id="company" placeholder="Enter first name" required class="form-control"></div>
            <div class="form-group"><label for="company" class=" form-control-label"></label><input name="lname" type="text" id="company" placeholder="Enter last name" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="telephone" type="text" id="city" placeholder="Enter a telephone number" required class="form-control"></div>
                        <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label"></label><input name="district" type="text" id="" placeholder="District Name" required class="form-control"></div>

                                    <div class="form-group"><label for="date" class=" form-control-label"></label><input name="date" type="text" id="" placeholder="Date" required class="form-control"></div>



                                    <div class='form-group'>
                                        <select name="gender" style="background-color:white;border-radius:10px;padding:10px;">
                                            <option selected>Select Gender</option>
                                            <option value="Male" name="gender">Male</option>
                                            <option value="Female" name="gender">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="country" class=" form-control-label"></label><input name="sign" type="text" id="country" placeholder="Signature (single character) e.g B" required class="form-control"></div>
                                    <button type="submit" class="btn" style="" >Register</button>
                                    <button type="reset" class="btn">Refresh</button>
                                </form>
                                </div>
                                    </div>
                                </div>

                                </div>
                            </div>
@endsection


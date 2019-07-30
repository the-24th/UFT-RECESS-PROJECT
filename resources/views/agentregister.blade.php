@extends('layouts.adminhome')
@section('title', 'Register Agent')

@section('content')



<div class="card" align="center">



<div class="card">
        <div class="card-header"><strong>AGENT REGISTRATION FORM</strong></div>
        <div class="card-body card-block">
            <form method="post" action="/registeragent">



                {{ csrf_field() }}
            <div class="form-group"><label for="first_name" class=" form-control-label"></label><input name="fname" type="text" id="fname" placeholder="Enter first name" required class="form-control"></div>
            <div class="form-group"><label for="company" class=" form-control-label"></label><input name="lname" type="text" id="lname" placeholder="Enter last name" required class="form-control"></div>
            <div class="form-group"><label for="city" class=" form-control-label"></label><input name="telephone" type="text" id="number" placeholder="Enter a telephone number" required class="form-control" minlength="10"></div>
                        <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label"></label><input name="district" type="district" id="" placeholder="District Name" required class="form-control"></div>

                                    <div class="form-group"><label for="date" class=" form-control-label"></label><input name="date" type="text" id="date" placeholder="Date (yyyy/MM/dd)" required class="form-control"></div>



                                    <div class='form-group'>
                                        <select name="gender" style="background-color:white;border-radius:10px;padding:10px;" placeholder="Select Gender">

                                            <option value="Male" name="gender">Male</option>
                                            <option value="Female" name="gender">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group"><label for="country" class=" form-control-label"></label><input name="sign" type="text" id="sign" placeholder="Signature (single character) e.g B" required class="form-control"></div>
                                    <button type="submit" class="btn" onsubmit="validate()" >Register</button>
                                    <button type="reset" class="btn">Refresh</button>
                                </form>
                                </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                            <script type="text/javascript">
                              function check(){
                                  var first=document.getElementById('fname');
                                  var last=document.getElementById('lname');
                                  var phone=document.getElementById('number');
                                  var date=document.getElementById('date');

                                  if(phone.value[0] != 0)
                                    {
                                    document.getElementById("number").innerHTML = "<h5 style='color: red'>Error! The number should be start with a zero.</h5>";

                                    }

                                     if(phone.value.length > 10 || phone.value.length < 10 )
                                    {
                                     document.getElementById("number").innerHTML = "<span style='color: red'>Error! The number should be 10 digits long.</span>";

                                    }

                              }

                              validate();
                                </script>

@endsection


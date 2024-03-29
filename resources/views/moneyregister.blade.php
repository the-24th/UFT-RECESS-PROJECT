@extends('layouts.adminhome')

@section('title','Register Money')

@section('content')

<form action="/reg" method="post" class="form-horizontal">
{{ csrf_field() }}
<div class="col-lg-6">
        <div class="card" style="margin-right:-500px;margin-left:50px;" >
            <div class="card-header" style="text-align:center">
                <strong>MONEY REGISTRATION</strong>
            </div>
            <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-12">
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                <input type="text" id="input1-group1" name="Name" placeholder="Name" required class="form-control">
                            </div>
                            </div>
                        </div>

            <div class="card-body card-block" >

                     <div class="row form-group">
                        <div class="col col-md-12">
                                <div class="input-group">
                                     <div class="input-group-addon"><i class="ti-home"></i></div>
                                     <input type="text" id="input1-group1" name="district" placeholder="District" required class="form-control">
                                     </div>
                                </div>
                            </div>

            <div class="card-body card-block">

                        <div class="row form-group">
                                 <div class="col col-md-12">
                                         <div class="input-group">
                                             <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                                  <input type="text" id="input1-group1" name="number" placeholder="Telephone Number" required class="form-control">
                                            </div>
                                         </div>
                                 </div>

                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <input type="email" id="input2-group1" name="email" placeholder="Email" required class="form-control">
                                    <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-12">
                                <div class="input-group">
                                    <div class="input-group-addon"><i>SHS.</i></div>
                                    <input type="text" id="input3-group1" name="amount" placeholder="donation amount" required class="form-control">
                                    <div class="input-group-addon">/=</div>
                                </div>
                            </div>

                             <div class="form-group"><label for="date" class=" form-control-label"></label><input name="date" type="text" id="" placeholder="Date (yyyy/MM/dd)" required class="form-control"></div>

                        </div>

                </div>
                <div class="">

                    <button type="submit" class="btn">
                        <i class="fa fa-dot-circle-o"></i> Register
                    </button>
                    <button type="reset" class="btn">

                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection

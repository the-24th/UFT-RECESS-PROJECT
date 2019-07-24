@extends('layouts.adminhome')

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <div style="margin-left:900px">
                                    <!--<a href="/but"> <button type="button" class="btn btn-primary btn-sm" onmouseover="change()">Make Payment</button></a>-->
                                     </div>
                        <strong class="card-title">Payment distribution</strong>
                    </div>
                    <div class="card-body">
                            <div id="bootstrap-data-table-export_filter" class="dataTables_filter">


                            </div>

                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <th colspan=3>Highest Enrollment Pay per head</th>
                                <th colspan=3>Normal pay per head</th>

                            </thead>
                            <tbody>

                                    <tr>
                                            <td>District name</td>
                                            <td>Agent head</td>
                                            <td>Agents</td>
                                            <td>Agent heads</td>
                                            <td>Agents</td>
                                            <td>Administrator</td>
                                            <td>Date</td>


                                        </tr>
                                     @foreach($payments as $payment)
                                <tr>
                                <td>{{$payment->districtname}}</td>
                                <td>{{$payment->Agenthead_pay}}</td>
                                <td>{{$payment->Agents_pay}}</td>
                                <td>{{$payment->Agentheadpay}}</td>
                                <td>{{$payment->Agentspay}}</td>
                                <td>{{$payment->Administrator_pay}}</td>
                                <td>{{date("Y-m-d")}}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
 </div><!-- .content -->


@endsection


@extends('layouts.adminhome')

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                            <div style="margin-left:900px">
                                    <a href="/but"> <button type="button" class="btn btn-primary btn-sm" onmouseover="change()">Make Payment</button></a>
                                     </div>
                        <strong class="card-title">Payment distribution</strong>
                    </div>
                    <div class="card-body">
                            <div id="bootstrap-data-table-export_filter" class="dataTables_filter">


                            </div>






                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <th colspan=2>Highest Enrollment Pay</th>
                                <th colspan=3>Normal pay</th>

                            </thead>
                            <tbody>

                                    <tr>
                                            <td>Agent head</td>
                                            <td>Agents</td>
                                            <td>Agent heads</td>
                                            <td>Agents</td>
                                            <td>Administrator</td>


                                        </tr>
                                        @foreach($high as $hi)
                                        @foreach($normal as $norm)
                                <tr>
                                <td>{{$hi->Agenthead_pay}}</td>
                                <td>{{$hi->Agents_pay}}</td>
                                <td>{{$norm->Agenthead_pay}}</td>
                                <td>{{$norm->Agents_pay}}</td>
                                <td>{{$norm->Administrator_pay}}</td>
                                </tr>
                                @endforeach
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


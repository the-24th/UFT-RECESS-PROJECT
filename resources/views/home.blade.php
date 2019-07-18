@extends('layouts.adminhome')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class=""></div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<a href="/tre"><div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Treasury Amount</div>
                        <div class="stat-digit">
                            @php
                            echo $data1['dimes']."/=";

                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></a>

    <a href="/members"><div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Party Members</div>
                        <div class="stat-digit">
                            @php
                                echo $data2['mems'];
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></a>

    <a href="/upgrade"><div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Upgrades</div>
                        <div class="stat-digit">770</div>
                    </div>
                </div>
            </div>
        </div>
    </div></a>

    <a href="/agentslist"><div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Party Agents</div>
                            <div class="stat-digit">
                                    @php
                                    echo $data3['agent'];
                                @endphp
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div></a>

        <div class="content mt-3">
                <div class="animated fadeIn">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">List of Agent Heads</strong>
                                </div>
                                <div class="card-body">
                                        <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                            <form method="post" action="/looksagenthead">
                                                {{ csrf_field() }}
                                            <label>Search:
                                                <p><input type="search" name="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export">
                                                <button type="submit" class="btn btn-primary btn-sm">search</button></p>
                                            </label>
                                            </form>
                                            <div style="margin-left:900px">
                                           <a href="/agentregister"> <button type="button" class="btn btn-primary btn-sm" onmouseover="change()">Add Agent</button></a>
                                            </div>
                                        </div>


                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Agent ID</th>
                                                <th>First-name</th>
                                                <th>Last-name</th>
                                                <th>Gender</th>
                                                <th>District</th>
                                                <th>Phone Number</th>
                                                <th>District assigned</th>
                                                <th>Date of Registration</th>
                                                <th>Signature</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                                @foreach($adds as $add)
                                            <tr>
                                            <td>{{$add->agentid}}</td>
                                            <td>{{$add->fname}}</td>
                                            <td>{{$add->lname}}</td>
                                            <td>{{$add->sex}}</td>
                                            <td>{{$add->district}}</td>
                                            <td>{{$add->number}}</td>
                                            <td>{{$add->district_assigned}}</td>
                                            <td>{{$add->date}}</td>
                                            <td>{{$add->signature}}</td>
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

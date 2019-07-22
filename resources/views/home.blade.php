@extends('layouts.adminhome')

@section('content')

<div class="">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
</div>
<a href="/tre"><div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text"><b>In Treasury</b></div>
                        <div class="stat-digit" style="font-size:20px">
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
                    <div class="stat-icon dib" style="color:red"><i class="fa fa-users"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text"><b>Party Members</b></div>
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
                    <div class="stat-icon dib"><i class="ti-settings text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text"><b>Upgrades</b></div>
                        <div>770</div>
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
                            <div class="stat-text"><b>Party Agents</b></div>
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
                                            <strong class="card-title">DISTRICTS</strong>
                                        </div>
                                        <div class="card-body">
                                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                                    <form method="post" action="/looksagenthead">
                                                        {{ csrf_field() }}
                                                    <label>
                                                        <p><input type="search" name="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export">
                                                        <button type="submit" class="btn btn-primary btn-sm">search</button></p>
                                                    </label>
                                                    </form>

                                                </div>


                                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>District Name </th>
                                                        <th>Number of members</th>
                                                        <th>Number of Agents</th>
                                                        <th>Agenthead</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach($hero as $her)
                                                    <tr>

                                                    <td>{{$her->name}}</td>
                                                    <td>{{$her->members_enrolled}}</td>
                                                    <td>{{$her->Number_of_agents}}</td>
                                                    <td>{{$her->lname}} {{$her->fname}}
                                                    </td>


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

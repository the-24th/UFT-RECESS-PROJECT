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
                        <div class="stat-text">Member Upgrades</div>
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


@endsection

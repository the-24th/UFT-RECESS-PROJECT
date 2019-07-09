@extends('layouts.adminhome')

@section('title', 'Treasury')

@section('content')

<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Donation Records</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>

                                        <th>Name of Wellwisher</th>

                                        <th>District </th>
                                        <th>Amount Registered</th>

                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach($donors as $donor)
                                        <tr>
                                        <td>{{ $donor->name}}</td>
                                        <td>{{ $donor->district}}</td>
                                        <td>{{ $donor->amount}}</td>

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

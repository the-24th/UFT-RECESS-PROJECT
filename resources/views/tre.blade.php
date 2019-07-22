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
                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                        <form method="post" action="/donate">
                                            {{ csrf_field() }}
                                        <label>Search:
                                            <p><input type="search" name="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export">
                                            <button type="submit" class="btn btn-primary btn-sm">search</button></p>
                                        </label>
                                        </form>
                                        <div style="margin-left:900px">
                                       <a href="/moneyregister"> <button type="button" class="btn btn-primary btn-sm" onmouseover="change()">Register Donation</button></a>
                                        </div>
                                    </div>
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name of Wellwisher</th>
                                        <th>District </th>
                                        <th>Telephone Number</th>
                                        <th>Email of wellwisher</th>
                                        <th>Amount Registered</th>

                                        <th>Actions</th>


                                        <th>Date</th>



                                    </tr>
                                </thead>
                                <tbody>

                                        @foreach($donors as $donor)
                                        <tr>
                                        <td>{{ $donor->id}}</td>
                                        <td>{{ $donor->name}}</td>
                                        <td>{{ $donor->district}}</td>
                                        <td>{{ $donor->Telephone_number}}</td>
                                        <td>{{ $donor->email}}</td>
                                        <td>{{ $donor->amount}}</td>
                                        <td>

                                                <a href=""><span class="ti-pencil"></span></a>
                                                <a href=""><span class="ti-trash"></span></a>
                                            </td>

                                        <td>{{ $donor->date}}</td>


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

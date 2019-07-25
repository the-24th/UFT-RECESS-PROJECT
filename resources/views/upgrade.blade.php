@extends('layouts.adminhome')

@section('title', 'Recommended members')

@section('content')

<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Recommended for Upgrade
                            </strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Member ID</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>District</th>
                                        <th>Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data2 as $data)
                                    <tr>                                       
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->gender}}</td>
                                        <td>{{$data->district}}</td>
                                        <td>
                                            <a href="upgrader/{{$data->id}}"><button type="submit" class="btn" style="" >Upgrade</button></a>
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

@extends('layouts.adminhome')

@section('title', 'List of Members')

@section('content')


<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List of Members</strong>
                        </div>
                        <div class="card-body">


                              <div id="bootstrap-data-table-export_filter" class="dataTables_filter">

                                        <form method="post" action="/looking">
                                            {{csrf_field()}}
                                        <label>Search:
                                            <p><input type="text" name="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export">
                                            <button type="submit" class="btn btn-primary btn-sm">search</button></p>
                                        </label>
                                        </form>
                                    </div>

                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Member ID</th>
                                        <th>Name of Member</th>
                                        <th>Gender</th>
                                        <th>District</th>
                                        <th>Date of Enrollment</th>
                                        <th>Enrolled By</th>
                                        <th>Recommender</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($mems as $mem)
                                    <tr>

                                        <td>{{$mem->id}}</td>
                                        <td>{{$mem->name}}</td>
                                        <td>{{$mem->gender}}</td>
                                        <td>{{$mem->district}}</td>
                                        <td>{{$mem->date_of_enrollment}}</td>
                                        <td>{{$mem->enrolled_by}}</td>
                                        <td>{{$mem->recommender}}</td>
                                        <td>

                                                <a href=""><span class="ti-pencil"></span></a>
                                                <a href=""><span class="ti-trash"></span></a>
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

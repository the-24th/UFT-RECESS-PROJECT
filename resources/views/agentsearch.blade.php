@extends('layouts.adminhome')
@section('title','Agent list' )

@section('content')
<div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List of Agents</strong>
                        </div>
                        <div class="card-body">
                                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                                    <form method="post" action="/looks">
                                        {{ csrf_field() }}
                                    <label>Search:
                                        <p><input type="search" name="search" class="form-control form-control-sm" placeholder="" aria-controls="bootstrap-data-table-export">
                                        <button type="submit" class="btn btn-primary btn-sm">search</button></p>
                                    </label>
                                    </form>
                                    <div style="margin-right:900px">
                                            <a href="/agentslist"> <button type="button" class="btn btn-primary btn-sm" onmouseover="change()">Show all Agents</button></a>
                                             </div>
                                    <div style="margin-left:900px">
                                   <a href="/agentregister"> <button type="button" class="btn btn-primary btn-sm">Add Agent</button></a>
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
                                        <th>Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach($finds as $find)
                                    <tr>
                                    <td>{{$find->agentid}}</td>
                                    <td>{{$find->fname}}</td>
                                    <td>{{$find->lname}}</td>
                                    <td>{{$find->sex}}</td>
                                    <td>{{$find->district}}</td>
                                    <td>{{$find->number}}</td>
                                    <td>{{$find->district_assigned}}</td>
                                    <td>{{$find->date}}</td>
                                    <td>{{$find->signature}}</td>
                                    <td>

                                            
                                        <a href="editagent/{{$find->agentid}}"><span class="ti-pencil"></span></a>
                                        <a href="/deleteagent/{{$find->agentid}}"><span class="ti-trash"></span></a>

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

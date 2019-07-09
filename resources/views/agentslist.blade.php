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

                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Agent ID</th>
                                        <th>First-name</th>
                                        <th>Last-name</th>
                                        <th>Gender</th>
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
                                    <td></td>
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

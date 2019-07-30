@extends('layouts.adminhome')
@section('title', 'Agent-heads')

@section('content')
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
                        <th>Actions</th>

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
                    <td>

                            <a href="editagenthead/{{$add->agentid}}"><span class="ti-pencil"></span></a>
                            <a href="/deleteagenthead/{{$add->agentid}}"><span class="ti-trash"></span></a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

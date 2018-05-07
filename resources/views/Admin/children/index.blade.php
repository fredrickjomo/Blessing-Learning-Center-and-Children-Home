@extends('layouts.admin')

@section('header')
    Children Currently In The Institution:
@endsection
@section('page-icon')
    <i class="fa fa-list"></i>
    @endsection

@section('content')

    <style>
        .profile{
            height: 80px;
            width: 80px;
            padding: 0;
        }
        .profile img{
            height: 80px;
            width: 80px;
            padding: 0;
        }
        .table-dark{
            background-color: #1b1e21;
            color: #f8f9fa;
        }

    </style>
    <table class="col-12 table table-dark table-bordered table-hover">
        <thead>
        <tr>
            <th>No:</th>
            <th>Photo</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Vulnerability</th>
            <th>Education Level</th>

        </tr>
        </thead>
        <tbody>

        @foreach($children_details as $child)
            <tr>

                <td>{{$t_count++}}</td>
                <td class="profile"><img src="{{asset($child->photo)}}" alt="Photo"></td>
                <td>{{$child->full_name}}</td>
                <td>{{$child->gender}}</td>
                <td>{{$child->age}}</td>
                <td>{{$child->vulnerability}}</td>
                <td>{{$child->education_level}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>


@endsection
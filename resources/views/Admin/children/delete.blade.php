@extends('layouts.admin')
@section('header')
Remove/Delete Child Information
    @endsection
@section('page-icon')
<i class="fa fa-trash"></i>
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
        .table tr td a:hover{
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
            <th></th>

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
                <td><a href="#"
                       onclick="
                    var result=confirm('Are you sure you want to delete this child?');
                    if (result){
                        event.preventDefault();
                        document.getElementById('delete-form').submit();
                    }"><button id="edit">Remove</button></a></td>
            </tr>
            <form id="delete-form" action="{{route('Children.destroy',$child->id)}}"
                  method="post" style="display: none;">
                <input type="hidden" name="_method" value="delete">
                {{csrf_field()}}
            </form>
        @endforeach

        </tbody>
    </table>

    @endsection
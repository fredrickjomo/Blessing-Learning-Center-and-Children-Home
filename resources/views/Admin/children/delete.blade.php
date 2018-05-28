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
                <td class="profile"><img src="/children_photo/{{$child->photo}}" alt="Photo"></td>
                <td>{{$child->full_name}}</td>
                <td>{{$child->gender}}</td>
                <td>{{$child->age}}</td>
                <td>{{$child->vulnerability}}</td>
                <td>{{$child->education_level}}</td>
                <td><form  method="post"
                           action="{{route('children.destroy',$child->id)}}"
                    onsubmit="return confirm('Are you sure you want to delete this child?')">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
            </tr>

        @endforeach

        </tbody>
    </table>

    @endsection
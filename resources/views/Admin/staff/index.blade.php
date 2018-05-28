@extends('layouts.admin')
@section('header')
    Staff currently in the institution
    @endsection
@section('page-icon')
    <i class="fa fa-list"></i>
@endsection
@section('content')
    <style>
        .container{
            margin-top:3%;
        //margin-bottom: 20%;
        }
        .container table{
            margin-bottom: 20%;
        }
        .container h2{
            padding-bottom: 10px;
            color: #1b1e21;
        }
        .container img{
            height: 80px;
            width: 80px;
            border-radius: 10px;
        }
        table tr{
            padding: 0;
            margin: 0 auto;
        }
        .container .profile{
            height: 80px;
            width: 80px;
        }
        .col-12 h2{
            font-size: 17px;
        }

    </style>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-10">
                <table class="col-12 table table-dark table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No:</th>
                        <th>Photo</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Middle Name</th>
                        <th>Position</th>


                    </tr>
                    </thead>
                    <tbody>

                    @foreach($staff as $staffs)
                        <tr>
                            <td>{{$t_count++}}</td>
                            <td class="profile"><img src="/staff_photo/{{$staffs->photo}}" alt="Photo"></td>
                            <td>{{$staffs->first_name}}</td>
                            <td>{{$staffs->last_name}}</td>
                            <td>{{$staffs->middle_name}}</td>
                            <td>{{$staffs->position}}</td>

                        </tr>

                    @endforeach


                    </tbody>
                </table>

            </div>

        </div>


    </div>


@endsection

@extends('layouts.main')
@section('content')
{{--@foreach($contacts as $contact)
    {{$contact->email}}
@endforeach
--}}
<link rel="stylesheet" href="{{asset('css/custom-css/contact-us.css')}}"
    <div class="container-fluid alert alert-dark">
        <div class="row">

            <div class="col-md-4 alert alert-primary div-1">
                <h4>Location</h4>
                <p>Situated: In Nakuru Kwa Rhondas Area Approximately
                200km North West of the Kenyan Capital city Nairobi.</p>
                <p>Next to Emmanuel Catholic Church</p>
                <br>
                <h4>Address</h4>
                <p>Blessing Learning Centre,<br>
                P.O BOX 14057-20100,<br>
                NAKURU</p>
                <br>
                <h4>Contacts</h4>
                <p class="fa fa-phone"> Tel No: 0720 203 229</p><br>
                <p class="fa fa-envelope"> Email:magret_ogol@yahoo.com</p>
            </div>
            <style>
                .col-md-2{
                    background-color: transparent;
                }
            </style>
            <div class="col-md-2 div-1"></div>
            <div class="col-md-5 alert alert-primary div-1">
                <p class="info">You would like to contact our institution, if you have any queries/ concerns/ thoughts or
                if you want to say "hello", please feel free to contact us using the form below.We
                would love to here from you and will endeavor to reply as soon as we can.Thank you!</p>
                <h4 id="message-header">Send us your message</h4>
                <form action="{{route('Contact_Us.store')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                        <div class="col-md-5">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                        <div class="col-md-5">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-md-4 col-form-label text-md-right">Your Message</label>

                        <div class="col-md-5">
                            <textarea id="message"class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" value="{{ old('message') }}" required autofocus>

                            @if ($errors->has('message'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Send Message
                            </button>
                        </div>
                    </div>




                </form>

            </div>
            <div class="col-md-1"></div>
        </div>

    </div>

    @endsection


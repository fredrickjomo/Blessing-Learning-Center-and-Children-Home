@extends('layouts.main')
@section('content')
    <style>

        html,body{
          //background-color: rgba(16,5,21,0.91);
        }

        .sponsor-child{
            margin-top:0.5%;
            background-color: #1b1e21;
            color: #f8f9fa;


        }
        .sponsor-child h1{
            color: #f8f9fa;
            text-align: center;
            font-family:Garamond;
            font-size: 40px;
        }
        .sponsor-child img{
            height: 600px;
            width: 100%;
        }
        .col-md-12 .row{
            padding-top: 20px;
        }
        .col-md-7 h2{
            padding-top: 8px;
            padding-bottom: 8px;
            color:rgba(99,220,45,0.33);
            font-family:Garamond;
        }
        .col-md-7 p, ol{
            list-style-type: inherit;
            font-family:Garamond;
            font-size: 20px;
        }
        .col-md-7 a{
            font-size: 25px;
        }
        .col-md-7 a:hover{
            color: #1c7430;
            text-decoration:none;
        }

    </style>
    <div class="container-fluid alert alert-dark sponsor-child">
        <div class="row">
            <div class="col-md-12">
                <h1>Child Sponsorship</h1>
                <hr>
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{asset('images/others/blc1.jpg')}}">
                    </div>
                    <div class="col-md-7">
                        <h2>Our Program</h2>
                        <p><strong>At Blessing Learning Centre</strong>, we would like to create a more personal experience
                         for both our children and their sponsors. We believe that our children need connection more than even money
                         or even gifts.They feel loved when they find someone close to them. They need to know that someone cares<br>
                            Our children come from a multitude of backgrounds of various status:</p>
                        <ol>
                            <li>Some with no parents at all i.e Total Orphans.</li>
                            <li>Some with one parent either father or mother i.e single parented.</li>
                            <li>Some with both parents but very vulnerable (poor) backgrounds.</li>
                        </ol>
                        <p>
                        Those with surviving relatives often find some level of contact with their families. We encourage these bonds
                         as we know how important a sense of family is to a child's development. We're looking for people who care ,
                        are supportive and are champions to encouraging and connecting to our children.
                        </p>
                        <p><strong>Support</strong> a child at Blessing Learning Centre at just a <strong>$1 (one dollar or Kshs.100) a day</strong> . This may seem too little to you
                         but you're encouraged to give more depending on your capability. Thank you!..<br>Read more on our
                            <a href="">Sponsorship Policy</a></p>

                    </div>

                    <div class="col-md-7">
                        <h2>Our Lasting Commitment</h2>
                        <p>
                            If you are thinking of getting involved in our child sponsorship program,
                            we ask you to consider carefully the commitment you are willing to make with us.
                            Our hope is: sponsors will become part of our children’s lives. They will not simply give money.
                            They will write letters, send pictures, occasionally call, share family stories, build a bond
                            that will enrich both your life and your sponsored child’s life. After so much abandonment, we
                            are hopeful these bonds can become a vital force that helps guide our children into adulthood, perhaps
                            surviving for a lifetime. For this reason, we ask all prospective sponsors to think carefully before
                            getting involved. A group of committed individuals is what we are looking for and we hope
                            you’ll join us by becoming a mentor, friend and extended member of the <strong>Blessing Learning Centre and Children
                                Home Family.</strong>
                        </p>
                    </div>
                    <div class="col-md-5">
                        <img src="{{asset('images/others/BlessingLearningCentre1.jpg')}}">
                    </div>
                    <style>
                        .col-md-12 .usage-div{
                            background-color: #f8f9fa;
                            margin-top:0.5%;
                            color:black;
                            font-family:Garamond;

                        }
                        .usage-div h2{
                            padding-top: 8px;
                            padding-bottom: 8px;
                            color:#1c7430;
                            font-family:Garamond;

                        }
                        .usage-div p,ol{
                            list-style-type: inherit;
                            font-family:Garamond;
                            font-size: 20px;
                        }
                    </style>
                    <div class="col-md-12 usage-div">
                        <h2>What our kids benefit from the Sponsorship funds</h2>
                        <p>Blessing Learning Centre wants to inform you that, 100% of all the funds raised in sponsorship
                            for our children in the institution <strong>is used for our children</strong>.<br>
                        There are no other hidden costs involved.The usage varies from child to child depending on the
                        needs of the sponsored kid. Any queries you might have related to this, please dont hesitate to contact
                        us via our contacts us page or the methods provided in the same page. The funds will cover the following:</p>
                        <ol>
                            <li>Food</li>
                            <li>Educational Expenses</li>
                            <li>General Expenses</li>
                            <li>Medical and Healthcare</li>
                            <li>Sanitation and Daily Needs e.g clothing</li>
                            <li>Some old fun e.g taking the child to a picnic</li>
                        </ol>

                    </div>
                    <style>
                        .third{
                            background-color: #1c7430;
                        }
                        .third .col-md-7 h2{
                            color: #f8f9fa;
                        }
                        .third .col-md-5 img{
                            height: 480px;
                        }
                    </style>
                    <div class="col-md-12 third">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{asset('images/others/blc2.jpg')}}">
                            </div>
                            <div class="col-md-7">
                                <h2>Gifts and Presents</h2>
                                <p>We accept presents and gifts sent by sponsors to their respective children e.g
                                the birthday gifts, letters, photos, story books and phone calls.<br></p>
                                <p>Even though we accept those gifts, there are some that we may mot accept.
                                They are as follows:
                                <ol>
                                    <li>Mobile Phones</li>
                                    <li>Laptops</li>
                                    <li>Motors e.g vehicles</li>
                                </ol>
                                </p>
                                <p>Please NOTE that we DON'T accept the above gifts and presents mainly because:<br>
                                Not all our children in the institution are sponsored that can be lavished the same gifts
                                    like others. Hence to avoid mental torture to other unsponsored children we encourage you
                                    that the best gifts you can give to your sponsored child are things that don’t cost much of anything
                                    as the ones mentioned above.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <style>
        .container-fluid .row .alert-primary{
            background-color: #005cbf;
            font-family: Garamond;
            margin-bottom: 10%;

        }
        .alert-primary h1{
            align-items: center;
            text-align: center;
            color: #f8f9fa;

        }
        .alert-primary p{
            color: #f8f9fa;
            font-size: 20px;
        }
        .alert-primary i{
            color: #f8f9fa;
            font-size: 50px;
            margin-left: 48%;
            padding-bottom: 0px;
            background-color: black;
        }
        .card{
            align-items: center;
            margin: 0 auto;
        }
        .card .card-header{
            color: red;
            font-family: Garamond;
            font-size: large;

        }
        .card-body{
            align-items: center;
            font-size: 20px;
        }
        .card-body span{
            color: red;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 alert alert-primary ">
                <h1>Process of Child Sponsoring:</h1>
                <p>First step is to fill in the form below and submit. After submission , we will be in contact with you
                and introduce you to the child you've selected from the dropdown list, send you the method of payment you will
                use for payments. <br></p>
                <p>We will also try to arrange for a phone call or video call if possible to your child so that you
                can both begin to get to know each other.</p>
                <i class="fa fa-angle-double-down"></i><br><br>
                <div class="card col-md-8">
                    <div class="card-header">
                        Fill in all the required fields below:
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('Sponsor.store')}}">
                        {{csrf_field()}} <!--laravel inbuilt function to ensure laravel forms work-->
                       <div class="container-fluid">
                           <div class="row">

                               <div class="col-md-12">


                                   <div class="form-group row">
                                       <label for="child">Child<span class="required">*</span> </label>


                                       <select id="child" class="form-control{{ $errors->has('child') ? ' is-invalid' : '' }}"  name="child_name" required>
                                           <option value="">---Select Child---</option>
                                           @foreach($children as $child_name )

                                               <option value="{{$child_name->id}}"{{old('child_name')==$child_name ? 'selected':''}}>{{$child_count++.' - '. $child_name->full_name}}</option>
                                           @endforeach

                                       </select>
                                       @if ($errors->has('child_name'))
                                           <span class="invalid-feedback">
                                        <strong>{{ $errors->first('child_name') }}</strong>
                                    </span>
                                       @endif

                                   </div>
                                   <div class="form-group row">
                                       <label for="amount">Amount of Sponsorship(Per Month)<span class="required">*(Minimum:$ 30)</span> </label>
                                       <input placeholder="Minimum of $ 30" id="amount" required name="amount_per_month" spellcheck="false" class="form-control{{ $errors->has('amount_per_month') ? ' is-invalid' : '' }}"  />
                                       @if ($errors->has('amount'))
                                           <span class="invalid-feedback">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                                   <div class="form-group row">
                                       <label for="method_of_payment">Method of Payment<span class="required">*</span> </label>


                                       <select id="method_of_payment" class="form-control{{ $errors->has('method_of_payment') ? ' is-invalid' : '' }}"  name="method_of_payment" required>
                                           <option value="">---Select Method---</option>
                                           <option value="Bank">1.Bank Account</option>
                                           <option value="Western Union">2.Western Union</option>
                                           <option value="PayPal">3.PayPal</option>>

                                       </select>
                                       @if ($errors->has('method_of_payment'))
                                           <span class="invalid-feedback">
                                        <strong>{{ $errors->first('method_of_payment') }}</strong>
                                    </span>
                                       @endif

                                   </div>
                                   <style>
                                       .button{
                                           align-items: center;
                                           margin-left: 25%;
                                           margin-right: 25%;

                                       }
                                       .button:hover{
                                           color: black;
                                       }
                                       .col-md-7{
                                           font-size: 30px;
                                       }
                                       .col-md-7:hover{
                                           background-color: black;
                                       }
                                   </style>
                                   <div class="form-group button">
                                       <input type="submit" class="btn btn-primary col-md-7" value="Submit"/>
                                   </div>

                               </div>


                           </div>
                       </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
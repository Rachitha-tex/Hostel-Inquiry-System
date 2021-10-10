@extends('base')
@section('content')
@section('title')
    {{'Contact Us'}}
@endsection
     <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">  
                            <h2 style="font-size: 2.5rem; font-weight:bold;color:black;">Here You Can Make A Complain About Your Hostel</h2>
                        </div>
                        <p style="font-size: 1.2rem;">Sabaragamuwa University of Sri Lanka here to have complains regarding to your hostels</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="message">
                                  <i class="fa fa-envelope"></i>
                                  <h4>Emails</h4>
                                  <span><a href="#">hello@company.com</a><br>
                                    </span>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{url('complain')}}" method="post" enctype="multipart/form-data">
                        @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Hostel Complain Form</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Student Name" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="hostelname" type="text" id="phone" placeholder="Hostel Name" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="floornumber" type="number" id="phone" placeholder="Floor Number" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                   <input name="roomnumber" type="number" id="phone" placeholder="Room Number" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                              <div id="filterDate2">    
                                <div class="input-group date" data-date-format="dd/mm/yyyy">
                                  <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                  <div class="input-group-addon" >
                                    <span class="glyphicon glyphicon-th"></span>
                                  </div>
                                </div>
                              </div>   
                          </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                   <input name="image" type="file" id="phone" placeholder="Room Number" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Problem" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Make A Complain</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
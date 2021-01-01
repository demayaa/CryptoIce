<?php
use Illuminate\Support\Str;
?>
@extends('blog.app')
@section('content')
  <!--Main Layout-->
  <main  style="margin-top:-50px;" >
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-5">
                <div class="text-center">
                    <div class="card card-body mb-3 blue-grey lighten-4">
                        <p class="mb-0 mt-0 blue-grey-text">Advertise Here</p>
                    </div>
                </div>
                <!-- Section: Contact v.1 -->
                <section class="my-5">
                
                  <!-- Section heading -->
                  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
                  <!-- Section description -->
                  <p class="text-center w-responsive mx-auto pb-5">You can send us a contact by filling in the form below.</p>
                
                  <!-- Grid row -->
                  <div class="row">
                
                    <!-- Grid column -->
                    <div class="col-lg-5 mb-lg-0 mb-4">
                
                      <!-- Form with header -->
                      <div class="card">
                        <div class="card-body">
                          <!-- Header -->
                          <div class="form-header blue accent-1">
                            <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                          </div>
                          <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
                          <!-- Body -->
                          <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form-name" class="form-control">
                            <label for="form-name">Your name</label>
                          </div>
                          <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="form-email" class="form-control">
                            <label for="form-email">Your email</label>
                          </div>
                          <div class="md-form">
                            <i class="fas fa-tag prefix grey-text"></i>
                            <input type="text" id="form-Subject" class="form-control">
                            <label for="form-Subject">Subject</label>
                          </div>
                          <div class="md-form">
                            <i class="fas fa-pencil-alt prefix grey-text"></i>
                            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                            <label for="form-text">Send message</label>
                          </div>
                          <div class="text-center">
                            <button class="btn btn-light-blue">Submit</button>
                          </div>
                        </div>
                      </div>
                      <!-- Form with header -->
                
                    </div>
                    <!-- Grid column -->
                
                    <!-- Grid column -->
                    <div class="col-lg-7">
                
                      <!--Google map-->
                      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
                        <iframe src="https://maps.google.com/maps?q=jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                          style="border:0" allowfullscreen></iframe>
                      </div>
                      <!-- Buttons-->
                      <div class="row text-center">
                        <div class="col-md-4">
                          <a class="btn-floating blue accent-1">
                            <i class="fas fa-map-marker-alt"></i>
                          </a>
                          <p>Jakarta, 94126</p>
                          <p class="mb-md-0">Indonesia</p>
                        </div>
                        <div class="col-md-4">
                          <a class="btn-floating blue accent-1">
                            <i class="fas fa-phone"></i>
                          </a>
                          <p>+ 62 8953-3019-403</p>
                          <p class="mb-md-0">Mon - Fri, 8:00-22:00</p>
                        </div>
                        <div class="col-md-4">
                          <a class="btn-floating blue accent-1">
                            <i class="fas fa-envelope"></i>
                          </a>
                          <p>info@cryptoice.biz</p>
                          <p class="mb-0">contact@cryptoice.biz</p>
                        </div>
                      </div>
                
                    </div>
                    <!-- Grid column -->
                
                  </div>
                  <!-- Grid row -->
                
                </section>
                <!-- Section: Contact v.1 -->
            </div>
            @include('blog.sidebar')
        </div>
    </div>
  </main>
  <!--Main Layout-->
@endsection

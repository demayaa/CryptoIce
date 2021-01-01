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
                <!-- Section: Team v.2 -->
                <section class="team-section text-center my-5">
                
                  <!-- Section heading -->
                  <h2 class="h1-responsive font-weight-bold my-5">Our amazing team</h2>
                  <!-- Section description -->
                  <p class="grey-text w-responsive mx-auto mb-5">CryptoICE is a discussion group about cryptocurrency, airdrops, defi, and others.</p>
                
                  <!-- Grid row -->
                  <div class="row row-cols-1 row-cols-md-2 text-center">
                  <?php foreach ($teams as $team): ?>
                    <!-- Grid column -->
                    <div class="col-md-6 mb-md-0 mb-5">
                      <div class="avatar mx-auto">
                        <img src="{{url('/data_file/team/'.$team->images)}}" class="rounded z-depth-1-half" alt="Sample avatar">
                      </div>
                      <h4 class="font-weight-bold dark-grey-text my-2">{{$team->name}}</h4>
                      <h6 class="text-uppercase grey-text mb-3"><strong>{{$team->jobs}}</strong></h6>
                      <!-- Twitter -->
                      <blockquote>{{$team->quote}}</blockquote>
                      <a href="{{$team->twitter}}" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
                        <i class="fab fa-twitter "></i>
                      </a>
                      <!--telegram-plane -->
                      <a href="{{$team->telegram}}" class="btn-floating btn-sm mx-1 mb-0 btn-tw">
                        <i class="fab fa-telegram-plane "></i>
                      </a>
                    </div>
                    <!-- Grid column -->
                  <?php endforeach; ?>
                
                  </div>
                  <!-- Grid row -->
                
                </section>
                <!-- Section: Team v.2 -->
            </div>
            @include('blog.sidebar')
        </div>
    </div>
        
  </main>
  <!--Main Layout-->
@endsection


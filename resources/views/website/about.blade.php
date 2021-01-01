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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title font-weight-bold text-center">About Us</h4>
                        <hr>
                        <p>CryptoIce is a discussion group about cryptocurrencies, airdrops, defi, and others.</p>
                    </div>
                </div>
            </div>
            @include('blog.sidebar')
        </div>
    </div>
        
  </main>
  <!--Main Layout-->
@endsection
<?php
use Illuminate\Support\Str;
?>
@extends('blog.app')
@section('content')
  <!--Main Layout-->
  <main  style="margin-top:-50px;" >
    <div class="container-fluid">
        <div class="row">
            @include('blog.post')
            @include('blog.sidebar')
        </div>
    </div>
  </main>
  <!--Main Layout-->
@endsection
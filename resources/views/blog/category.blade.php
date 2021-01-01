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
                <div class="row row-cols-1 row-cols-md-2">
                    <?php foreach ($postingan as $post): ?>
                        <div class="col mb-4">
                            <!-- Card -->
                            <div class="card">
                                <!--Card image-->
                                <div class="view overlay">
                                    <img class="card-img-top" src="{{url('/data_file/'.$post->img)}}" alt="Card image cap" />
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title">{{$post->title}}</h4>
                                    <!--Text-->
                                    <p class="card-text">{!! Str::limit($post->content, 50) !!}...</p>
                                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                                    <a href="/posts/{{$post->slug}}" class="btn btn-light-blue btn-md">Read more</a>
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    <?php endforeach; ?>
                    {{$postingan->links()}}
                </div>
            </div>

            @include('blog.sidebar')
        </div>
    </div>
  </main>
  <!--Main Layout-->
@endsection
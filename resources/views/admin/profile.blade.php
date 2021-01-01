@extends('layouts.app')

@section('content')
<style>
    html,
    body,
    header,
    .jarallax {
      height: 100px;
    }
    .page-footer {
      margin-top: 0px;
      padding-top: 0px;
    }

  </style>
    <div class="container">

      <!--Section: Team v.1-->
      <section class="text-center team-section">

        <!--Grid row-->
        <div class="row text-center">

          <!--Grid column-->
          <div class="col-md-12 mb-4" style="margin-top: -100px;">

            <div class="avatar mx-auto">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="img-fluid rounded-circle z-depth-1"
                alt="First sample avatar image">
            </div>
            <h3 class="my-3 font-weight-bold">
              <strong>{{Auth::user()->name}}</strong>
            </h3>
            <h6 class="font-weight-bold teal-text mb-4">Web Designer</h6>

            <!--Facebook-->
            <a class="p-2 m-2 fa-lg fb-ic">
              <i class="fab fa-facebook-f grey-text"> </i>
            </a>
            <!--Twitter-->
            <a class="p-2 m-2 fa-lg tw-ic">
              <i class="fab fa-twitter grey-text"> </i>
            </a>
            <!--Instagram-->
            <a class="p-2 m-2 fa-lg ins-ic">
              <i class="fab fa-instagram grey-text"> </i>
            </a>

            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore
              magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
              pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</p>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Team v.1-->

    </div>

@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Material Design for Bootstrap</title>
        <!-- MDB icon -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" />
        <!-- Your custom styles (optional) -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
          @toastr_css
    </head>
    <body class="fixed-sn light-blue-skin">
        <!--Double navigation-->
        <header>
            <!-- Sidebar navigation -->
            <div id="slide-out" class="side-nav sn-bg-4 fixed">
                <ul class="custom-scrollbar">
                    <!-- Side navigation links -->
                    <li>
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a href="/" class="waves-effect arrow-r"><i class="fas fa-house-damage"></i> Home</a>
                            </li>
                            <li>
                                <a href="/posts/category/airdrop" class="waves-effect arrow-r"><i class="fab fa-phoenix-squadron"></i> Airdrop</a>
                            </li>
                            <li>
                                <a href="/posts/category/news" class="waves-effect arrow-r"><i class="fas fa-newspaper"></i> News</a>
                            </li>
                            <li>
                                <a href="/posts/category/cryptocurrency" class="waves-effect arrow-r"><i class="fab fa-btc"></i> Cryptocurrency</a>
                            </li>
                            <li>
                                <a href="/posts/category/announcement" class="waves-effect arrow-r"><i class="fas fa-bullhorn"></i> Announcement</a>
                            </li>
                            <li>
                                <a href="/contact" class="waves-effect arrow-r"><i class="fas fa-phone-volume"></i> Contact</a>
                            </li>
                            <li>
                                <a href="/team" class="waves-effect arrow-r"><i class="fas fa-phone-volume"></i> about us</a>
                            </li>
                        </ul>
                    </li>
                    <!--/. Side navigation links -->
                </ul>
                <div class="sidenav-bg mask-strong"></div>
            </div>
            <!--/. Sidebar navigation -->
            <!-- Navbar -->
            <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
                </div>
                <!-- Breadcrumb-->
                <div class="mr-auto">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb clearfix d-md-inline-flex pt-0">
                            <li class="breadcrumb-item"><a class="white-text" href="/">CryptoIce</a></li>
                        </ol>
                    </nav>
                </div>
            </nav>
            <!-- /.Navbar -->
            <div
                class="jumbotron card card-image mask flex-center waves-effect waves-light rgba-teal-strong"
                style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5Wz5fp3YS4qeJMDgut0ulld5qXSJDHfgabw&usqp=CAU);"
            >
                <div class="text-white text-center py-5 px-4">
                    <div>
                        <h2 class="h1-responsive cyan-lighter-hover pt-4 mb-2 font-weight-bold"><strong>Welcome To Cryptoice </strong></h2>
                    </div>
                </div>
            </div>
            <div style="margin-top: -30px;">
                <script src="https://widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
                <coingecko-coin-price-marquee-widget coin-ids="bitcoin,eos,ethereum,litecoin,ripple,1inch,tron,dogecoin" currency="usd" background-color="#ffffff" locale="id"></coingecko-coin-price-marquee-widget>
            </div>
        </header>
        <!--/.Double navigation-->
        @yield('content')
        <!-- Footer -->
        <footer class="page-footer font-small indigo mt-5">
        
          <!-- Footer Links -->
          <div class="container">
        
            <!-- Grid row-->
            <div class="row text-center d-flex justify-content-center pt-5 mb-3">
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="#!">About us</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="#!">Products</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="#!">Awards</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="#!">Help</a>
                </h6>
              </div>
              <!-- Grid column -->
        
              <!-- Grid column -->
              <div class="col-md-2 mb-3">
                <h6 class="text-uppercase font-weight-bold">
                  <a href="#!">Contact</a>
                </h6>
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">
        
            <!-- Grid row-->
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
        
              <!-- Grid column -->
              <div class="col-md-8 col-12 mt-5">
                <p style="line-height: 1.7rem">CryptoIce is a discussion group about cryptocurrencies, airdrops, defi, and others.</p>
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
            <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">
        
            <!-- Grid row-->
            <div class="row pb-3">
        
              <!-- Grid column -->
              <div class="col-md-12">
        
                <div class="mb-5 flex-center">
        
                  <!-- Facebook -->
                  <a class="fb-ic">
                    <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
                  </a>
                  <!-- Twitter -->
                  <a class="tw-ic">
                    <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
                  </a>
                  <!-- Google +-->
                  <a class="gplus-ic">
                    <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
                  </a>
                  <!--Linkedin -->
                  <a class="li-ic">
                    <i class="fab fa-linkedin-in fa-lg white-text mr-4"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic">
                    <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
                  </a>
                  <!--Pinterest-->
                  <a class="pin-ic">
                    <i class="fab fa-pinterest fa-lg white-text"> </i>
                  </a>
        
                </div>
        
              </div>
              <!-- Grid column -->
        
            </div>
            <!-- Grid row-->
        
          </div>
          <!-- Footer Links -->
        
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2021 Copyright:
            <a href="https://cryptoice.biz/"> CryptoIce.biz</a>
          </div>
          <!-- Copyright -->
        
        </footer>
        <!-- Footer -->
        <!-- jQuery -->
        <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
        <!-- Your custom scripts (optional) -->
        <script type="text/javascript">
            $(document).ready(function () {
                // SideNav Button Initialization
                $(".button-collapse").sideNav();
                // SideNav Scrollbar Initialization
                var sideNavScrollbar = document.querySelector(".custom-scrollbar");
                var ps = new PerfectScrollbar(sideNavScrollbar);
            });
        </script>
        @toastr_js
        @toastr_render
    </body>
</html>

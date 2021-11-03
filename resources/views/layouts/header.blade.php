<header class="section-header">
    <nav class="navbar p-md-0 navbar-expand-sm navbar-light border-bottom">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTop4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarTop4" style="">
        <ul class="navbar-nav mr-auto">
            <li>Free Shipping for Orders Above 5000 PHP</li>

            <!--
                <li class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">   Language </a>
                <ul class="dropdown-menu small">
                    <li><a class="dropdown-item" href="#">English</a></li>
                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                    <li><a class="dropdown-item" href="#">Russian </a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> USD </a>
                    <ul class="dropdown-menu small">
                        <li><a class="dropdown-item" href="#">EUR</a></li>
                        <li><a class="dropdown-item" href="#">AED</a></li>
                        <li><a class="dropdown-item" href="#">RUBL </a></li>
                    </ul>
                </li>
            -->
        </ul>
        <ul class="navbar-nav">
            <li><a href="#" class="nav-link"> <i class="fa fa-comment"></i> Live chat </a></li>
            <li><a href="tel:+639956093956" class="nav-link"> <i class="fa fa-phone"></i> Call us </a></li>
        </ul> <!-- list-inline //  -->
      </div> <!-- navbar-collapse .// -->
    </div> <!-- container //  -->
    </nav>
    
    <section class="header-main border-bottom">
        <div class="container">
    <div class="row row-sm align-items-center">
        <div class="col-lg-2 col-md-3 col-6">
            <a href="{{ route('user_home') }}" class="brand-wrap">
                <img class="logo" src="../images/logo.png">
            </a> <!-- brand-wrap.// -->
        </div>
        <div class="col-lg col-sm col-md col-6 flex-grow-0">
            <div class="category-wrap dropdown d-inline-block float-md-right">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                    <i class="fa fa-bars"></i> All category 
                </button>
                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <a class="dropdown-item" href="#">Machinery / Mechanical Parts / Tools </a>
                    <a class="dropdown-item" href="#">Consumer Electronics / Home Appliances </a>
                    <a class="dropdown-item" href="#">Auto / Transportation</a>
                    <a class="dropdown-item" href="#">Apparel / Textiles / Timepieces </a>
                    <a class="dropdown-item" href="#">Home &amp; Garden / Construction / Lights </a>
                    <a class="dropdown-item" href="#">Beauty &amp; Personal Care / Health </a> 
                </div>
            </div>  <!-- category-wrap.// -->
        </div> <!-- col.// -->
        <div class="col-lg  col-md-6 col-sm-12 col">
            <form action="#" class="search-header">
                <div class="input-group w-100">
                    <input type="text" class="form-control" style="width:60%;" placeholder="Search">
                    
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                </div>
            </form> <!-- search-wrap .end// -->
        </div> <!-- col.// -->
        <div class="col-lg-3 col-sm-12 col-md-12 col-12">
            <div class="widgets-wrap float-md-right">
                @guest
                <div class="widget-header dropdown">
                    <a href="#" data-toggle="dropdown" data-offset="20,10" aria-expanded="false">
                        <div class="icontext">
                            <div class="icon">
                                <i class="icon-sm rounded-circle border fa fa-user"></i>
                            </div>
                            <div class="text">
                                <small class="text-muted">Sign in | Join</small>
                                <div>My account <i class="fa fa-caret-down"></i> </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(138px, 42px, 0px);">
                        
                        
                        <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                            @if ($errors->any())
                            <script>
                                window.location = "/login";
                              </script>
                            @endif
                            <x-jet-validation-errors class="mb-4" />
                            @csrf
                            <div class="form-group">
                              <label>Email address</label>
                              <input id="email" name="email" class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus >
                            </div>
                            <div class="form-group">
                              <label>Password</label>
                              <input input id="password" name="password" class="form-control" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('register') }}">Don't have account? Sign up</a>
                            @if (Route::has('password.request'))
                                <a class="dropdown-item" href="{{ route('password.request') }}">Forgot password?</a>
                            @endif
                    </div> <!--  dropdown-menu .// -->
                </div>  <!-- widget-header .// -->        
                @endguest

                @auth
                    
                    
                    <!--<div class="widget-header mr-3">
                        <a href="#" class="widget-view">
                            <div class="icon-area">
                                <i class="fa fa-comment-dots"></i>
                                <span class="notify">1</span>
                            </div>
                            <small class="text"> Message </small>
                        </a>
                    </div>
                -->
                    <div class="widget-header mr-3">
                        <a href="#" class="widget-view">
                            <div class="icon-area">
                                <i class="fa fa-store"></i>
                            </div>
                            <small class="text"> Orders </small>
                        </a>
                    </div>
                    <div class="widget-header">
                        <a href="#" class="widget-view">
                            <div class="icon-area">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <small class="text"> Cart </small>
                        </a>
                    </div> 

                    <div class="widget-header dropdown show">
                        <a href="#" class="ml-4 icontext" data-toggle="dropdown" data-offset="20,10" aria-expanded="true">
                            <div class="icon"><i class="text-primary fa fa-lg fa-user"></i></div>
                            <div class="text"> 
                                <small class="text-muted">Hello {{Auth::user()->firstname}}</small> 
                                <div>Account <i class="fa fa-caret-down"></i></div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-26px, 46px, 0px);">
                            <a class="dropdown-item" href="{{ route('user.overview') }}">Overview</a>
                            <a class="dropdown-item" href="#">My orders</a>
                            <hr class="dropdown-divider">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    class="dropdown-item"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();
                                    ">{{ __('Logout') }}
                                </a>
                            </form>
                            
                        </div> <!--  dropdown-menu .// -->
                    </div>
                @endauth

            </div> <!-- widgets-wrap.// -->
        </div> <!-- col.// -->
    </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
    
    @if(!Route::is('user_home') )
    <nav class="navbar navbar-main navbar-expand-lg border-bottom">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main_nav4" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="main_nav4" style="">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link pl-0" href="#"> <strong>All category</strong></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fruits and Vegetables</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Canned Goods</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Frozen Foods</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Rice</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Biscuit and Crackers</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Foods and Drink</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Category 1</a>
                <a class="dropdown-item" href="#">Category 2</a>
                <a class="dropdown-item" href="#">Category 3</a>
              </div>
            </li>
          </ul>
        </div> <!-- collapse .// -->
      </div> <!-- container .// -->
    </nav> <!-- navbar main end.// -->
    @endif

 </header>
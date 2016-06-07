<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
    Draco|DrugCollection's
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="{{ url('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ url('css/owl.theme.css')}}" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="{{ url('css/style.default.css')}}" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="{{ url('css/custom.css')}}" rel="stylesheet">

    <script src="{{ url('js/respond.min.js')}}"></script>

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="{{url('auth/register')}}">Register</a>
                    </li>
                    <!-- <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                       
                    <form class="form-horizontal" role="form" method="POST" action="/auth/login">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="{{url('auth/register')}}"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"> Items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">
 
                <a class="navbar-brand home" href="index.html" data-animate-hover="bounce">
                    <img src="img/draco.png" alt="Obaju logo" style="max-width: 100px" class="hidden-xs">
                    
                </a>

                <ul class="nav navbar-nav navbar-left">

                    <li class="active"><a href="{{ url('/') }}">Home</a>
                    </li>


            


                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Keluhan <b class="caret"></b></a>


                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                           
                                            <ul>
                                            <table>
                                            @foreach($draco as $key => $produk)
                                            @if($key < 5)
                                            <tr>

                                            <td><a href="{{$produk->nama_produk }}">{{ $produk->nama_produk}}</a></td>
                                            </tr>
                                            
                                            @endif
                                            @endforeach
                                            </table>

        
                                                
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                        
                                            <ul>
                                            <table>
                                            @foreach($draco as $key => $produk)
                                            @if($key > 5 && $key < 11)
                                            <tr>
                                            <td><a href="{{$produk->nama_produk }}">{{ $produk->nama_produk}}</td>
                                            </tr>
                                            
                                            @endif
                                            @endforeach
                                            </table>

        
                                                
                                            </ul>   
                                        </div>

                                          <div class="col-sm-3">
                                            <ul>
                                            <table>
                                            @foreach($draco as $key => $produk)
                                            @if($key > 10 && $key < 16)
                                            <tr>
                                            <td><a href="{{$produk->nama_produk }}">{{ $produk->nama_produk}}</td>
                                            </tr>
                                            
                                            @endif
                                            @endforeach
                                            </table>
                                            </ul>
                                        </div>

                                        <div class="col-sm-3">
                                            <ul>
                                            <table>
                                            @foreach($draco as $key => $produk)
                                            @if($key > 17 && $key < 28)
                                            <tr>
                                            <td><a href="{{$produk->nama_produk }}">{{ $produk->nama_produk}}</td>
                                            </tr>
                                            
                                            @endif
                                            @endforeach
                                            </table>
                                            </ul>
                                        </div>


                                       
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                    <ul class="nav navbar-nav navbar-left">
                     <li class="active"><a href="{{ url('/blog/all') }}">Blog</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

      <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

        </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->
                
     
    @yield('content')      



    <script src="{{url('js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.cookie.js')}}"></script>
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <script src="{{url('js/modernizr.js')}}"></script>
    <script src="{{url('js/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/front.js')}}"></script>  
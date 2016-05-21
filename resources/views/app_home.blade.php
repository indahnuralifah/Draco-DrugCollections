
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

    <script src="js/respond.min.js"></script>

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
                    <li><a href="register.html">Register</a>
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
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

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
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="{{ url('/welcome') }}">Home</a>
                    </li>


                    <li class="dropdown yamm-fw">

       


                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>

                                                <li><a href="{{route('anti_jamur')}}" value="batuk">Anti Jamur</button>

                                                <li><a href="index.html">Homepage</a>

                                                </li>
                                                <li><a href="{{route('anti_septik')}}">Anti Septik</a>
                                                </li>
                                                <li><a href="{{route('asam_urat')}}">Asam Urat</a>
                                                </li>
                                                <li><a href="{{route('balsem')}}">Balsem</a>
                                                </li>
                                                <li><a href="{{route('batuk_berdahak')}}">Batuk Berdahak</a>
                                                </li>
                                                <li><a href="{{route('batuk_pilek')}}">Batuk Pilek</a>
                                                </li>
                                                <li><a href="{{route('demam')}}">Demam</a>
                                                </li>
                                                <li><a href="{{route('diare')}}">Diare</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="{{route('gatal')}}">Gatal</a>
                                                </li>
                                                <li><a href="{{route('gatal_alergi')}}">Gatal dan Alergi</a>
                                                </li>
                                                <li><a href="{{route('jerawat')}}">Jerawat</a>
                                                </li>
                                                <li><a href="{{route('kalsium')}}">Kalsium</a>
                                                </li>
                                                <li><a href="{{route('lambung')}}">Lambung</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="{{route('mata')}}">Mata</a>
                                                </li>
                                                <li><a href="{{route('sesak')}}">Sesak</a>
                                                </li>
                                                <li><a href="{{route('pencahar')}}">Pencahar</a>
                                                </li>
                                                <li><a href="{{route('pilek')}}">Pilek</a>
                                                </li>
                                                <li><a href="{{route('sariawan')}}">Sariawan</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="{{route('susu')}}">Susu</a>
                                                </li>
                                                <li><a href="{{route('vitamin')}}">Vitamin</a>
                                                </li>
                                                <li><a href="{{route('vitamin_anak')}}">Vitamin Anak</a>
                                                </li>
                                                <li><a href="{{route('panas')}}">Panas</a>
                                                </li>
                                                <li><a href="{{route('suplemen')}}">Suplemen</a>
                                                </li>
                                                <li><a href="{{route('mulut_tenggorokan')}}">Mulut Dan Tenggorokan</a>
                                                </li>
                                                <li><a href="{{route('madu')}}">Madu</a>
                                                </li>
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
                        <span class="sr-only">Toggle search</span>
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
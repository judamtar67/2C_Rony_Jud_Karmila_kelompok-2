<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>niture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">

    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
     <!-- end loader -->

    <div class="wrapper">

       
        <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active"> <a href="/">Home</a></li>
                 <li> <a href="/about">About</a></li>
                                        <li> <a href="/product">Product</a></li>
                                        <li> <a href="/blog">Blog</a></li>
                                        <li> <a href="/contact">Contact us</a></li>

            </ul>

        </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-3 logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="/"><img src="images/logo.jpg" alt="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="right_header_info">
                                    <ul>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="icon/1.png" alt="#" /></a>
                                        </li>
                                        <li class="tytyu">
                                            <a href="#"><img style="margin-right: 15px;" src="icon/2.png" alt="#" /></a>
                                        </li>
                                        <li>
                                            <a href="#"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a>
                                        </li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="images/menu_icon.png" alt="#" />
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end header inner -->
            </header>
            <!-- end header -->
            @yield('content')
            <!--  footer -->
            <footer>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="border1">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                                    <img class="logo1" src="images/logo1.jpg" />
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                    <ul class="lik">
                                        <li> <a href="/">Home</a></li>
                                        <li> <a href="/about">About</a></li>
                                        <li> <a href="/product">Product</a></li>
                                        <li> <a href="/blog">Blog</a></li>
                                        <li> <a href="/contact">Contact us</a></li>
                                    </ul>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                    <ul class="sociel">
                                        <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="new">
                                    <h3>Newsletter</h3>
                                    <form class="newtetter">
                                        <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                        <button class="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="newtt">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point
                                        <br> of using Lorem I</p>
                                </div>
                            </div>
                        </div>

                    </div>
                  
                    <div class="copyright">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
                    </div>
            
             </div>

            </footer>
            <!-- end footer -->
        </div>

    </div>

@yield('overlay')
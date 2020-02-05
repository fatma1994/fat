<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pedagogique</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>
<body class="administration-page">
    <form action="index.blade.php" method="POST"></form>
    <div class="page-header">
        <header class="site-header">
            <div class="top-header-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                            <div class="header-bar-email d-flex align-items-center">
                                <i class="fa fa-envelope"></i><a href="#">fallougalass@gmail.com</a>
                            </div><!-- .header-bar-email -->

                            <div class="header-bar-text lg-flex align-items-center">
                                <p><i class="fa fa-phone"></i>221-77-641-84-90 </p>
                            </div><!-- .header-bar-text -->
                        </div><!-- .col -->
                         <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                                     <div class="header-bar-search">
                                <form class="flex align-items-stretch">
                                    <input type="search" placeholder="Rechercher">
                                    <button type="submit" value="" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- .header-bar-search -->


                               @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                            

                        </div><!-- .col -->

                        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                            

                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.html" rel="home">Lycee<span>excellence</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                     <li><a href="{{'/'}}">R</a></li>
                                    <li><a href="{{'teacher'}}">Teacher</a></li>
                                     <li><a href="{{'matiere'}}">Matiere</a></li>
                                    <li><a href="{{'cours'}}">Cours</a></li>
                                    <li><a href="{{'note'}}">Note</a></li>
                                </ul>

                                <div class="header-bar-cart">
                                    <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                                </div><!-- .header-bar-search -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
             <div class="row">
                    <div class="col-12">
                         <div class="col-6">
                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                            <header class="entry-header">
                            <h1 class="text-success">Travail-Dicipline-Reussite</h1>
                            </header><!-- .entry-header -->

                        
                        </div><!-- .hero-content-wrap -->
                    </div><!-- .col -->
                </div><!-- .row -->

        </header><!-- .site-header -->

       

  


        
     
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/s1.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/s3.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/s2.jpg" class="d-block w-100" alt="...">
              </div>
               <div class="carousel-item">
                <img src="images/s5.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </di>
                </div>
            </div>                    
        </div> 
        </div>
        </div>
    </div>    


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs">
                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#"><i class="fa fa-home"></i> accueil</a></li>
                        <li>Pedagogique</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->



<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="foot-about">
                        
                        <h2>Lycee Excellence</h2>
                        <p>le personnel de l administration </p>

                        <p class="footer-copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> lycee d'excellence|proprietaire <i class="fa fa-heart-o" aria-hidden="true"></i>
 <footer class="entry-footer read-more">
                                <h5>Copyright sokhnafatma@!</h5>
                            </footer><!-- .entry-footer -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .foot-about -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="foot-contact">
                        <h2>Contact Us</h2>

                        <ul>
                            <li>Email: fallougalass@gmail.com</li>
                            <li>Phone: (+221)77-641-84-90</li>
                            <li>Address:avenu cheikhoul khadim</li>
                        </ul>
                    </div><!-- .foot-contact -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="quick-links flex flex-wrap">
                        <h2 class="w-100">Quick Links</h2>

                        

                        <ul class="w-50">
                            <li><a href="{{('contact')}}">Documentation</a></li>
                            <li><a href="{{('infos')}}">Infos</a></li>
                            <li><a href="{{('infos')}}">video</a></li>
                            
                        </ul>
                    </div><!-- .quick-links -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="follow-us">
                        <h2>Follow Us</h2>

                        <ul class="follow-us flex flex-wrap align-items-center">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div><!-- .quick-links -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .footer-widgets -->

   <marquee><h5>Bienvenu au lycee d' excellence!!!</h5></marquee>
</footer><!-- .site-footer -->
                      
 <section class="home-gallery">
        <div class="gallery-wrap flex flex-wrap">
            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/fal.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/s1.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x2">
                <a href="#"><img src="images/s4.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/fat.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/fati.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x1">
                <a href="#"><img src="images/s2.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x1">
                <a href="#"><img src="images/s3.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/ima.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x2 ">
                <a href="#"><img src="images/fa.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/s4.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/k.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid2x1">
                <a href="#"><img src="images/k.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid3x1">
                <a href="#"><img src="images/fa.jpg" alt=""></a>
            </div><!-- .gallery-grid -->

            <div class="gallery-grid gallery-grid1x1">
                <a href="#"><img src="images/o.jpg" alt=""></a>
            </div><!-- .gallery-grid -->
        </div><!-- .gallery-wrap -->
    </section><!-- .home-gallery -->




  
    <script type='text/javascript' src="{{asset('js/app.js')}}"></script>
</body>
</html>
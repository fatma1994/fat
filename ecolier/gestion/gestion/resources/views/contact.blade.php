<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lycee Excellence</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">

    <script src= "https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" 
      referrerpolicy= "origin" ></script> 
</head>
<form action="index.blade.php" method="POST"></form>
<body class="contact-page">
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

                           
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.html" rel="home">Lycee<span>Excellence</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"><a href="{{'/'}}">accueil</a></li>
                                   
                                    <li><a href="#">Contact</a></li>
                                </ul>

                                <div class="hamburger-menu d-lg-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div><!-- .hamburger-menu -->

                                <div class="header-bar-cart">
                                    <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                                </div><!-- .header-bar-search -->
                            </nav><!-- .site-navigation -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .nav-bar -->
        </header><!-- .site-header -->
  
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/s6.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/s1.jpg" class="d-block w-100" alt="">
              </div>
               <div class="carousel-item">
                <img src="images/fal.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/fa.jpg" class="d-block w-100" alt="...">
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
                        <li>Contact</li>
                    </ul>
                </div><!-- .breadcrumbs -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row justify-content-between">
            <div class="col-12">
                <div class="contact-gmap">
                   
                     <img src="images/p.png" class="d-block w-100" alt="">
                </div><!-- .contact-gmap -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="contact-form">
                    <h3>Contact From</h3>

                    <form  action="" method="post" id="form">
                         @csrf
                        <div id="error"></div>
                        <input type="text" id="nom" placeholder="votre Nom">
                        <input type="email" id="email" placeholder="Votre Email">
                        <input type="text" id="subj"  placeholder="Subject">
                        <textarea class="description" name="description" placeholder="votre Message" id="description" rows="4"></textarea>
                        <input type="submit" id="envoyer" value="Envoyer">
                    </form>
                </div><!-- .contact-form -->
            </div><!-- .col -->

            <div class="col-12 col-lg-6">
                <div class="contact-info">
                    <h3>Contact Information</h3>

                    <p>des informations qui vous permettent de nous localiser </p>

                    <ul class="p-0 m-0">
                        <li><span>Location:</span>Avenue Cheikhoul Khadim</li>
                        <li><span>Email:</span><a href="#">fatima@gmail.com</a></li>
                        <li><span>Phone:</span><a href="#">(221) 76-666-45-12</a></li>
                    </ul>
                </div><!-- .contact-info -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="clients-logo">
        <div class="container">
            
                            <p class="footer-copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Fallougalass <i class="fa fa-heart-o" aria-hidden="true"></i> 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        
    </div>
    </div>
                    
  <script type='text/javascript' src="{{asset('js/app.js')}}"></script>


<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
   tinymce.init({
       selector:'textarea.description',
       width: 300,
       height: 300
   });
</script>
</body>
</html>
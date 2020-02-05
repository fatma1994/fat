<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lycee Excelllence</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}"
</head>
<body class="single-courses-page">
        <form action="administration.blade.php" method="POST"></form>
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
                                    <input type="search" placeholder="Recherche">
                                    <button type="submit" value="" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- .header-bar-search -->

                            
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 col-lg-3">
                            <div class="site-branding">
                                <h1 class="site-title"><a href="index.html" rel="home">Lycee<span>Excelllence</span></a></h1>
                            </div><!-- .site-branding -->
                        </div><!-- .col -->

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                            <nav class="site-navigation flex justify-content-end align-items-center">
                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li class="current-menu-item"><a href="index.blade.php">administration</a></li>
                                  
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

        <div class="page-header-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="entry-header">
                            <h1 class="entry-title">Modification</h1>
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
        <div class="container-fluid"> 
        	<div class="row">
             <div class=" col-lg-6 col-lg-offset-3">
            <div class="form-group">
            <form action="{{route('eleves_update',['id'=>$eleve->id])}}" method="post" class="form-horizontal">
	@csrf
	@method('patch')
     
            
         <div class="form-group">
        <label for="matricule">Matricule</label>
		<input type="text" name="matricule" placeholder="matricule"class="form-control"required value="{{$eleve->matricule}}">
    </div>
    <div class="form-group">
        <label for="Nom">Nom</label>
		<input type="text" name="nom" class="form-control" value="{{$eleve->nom}}">
    </div><div class="form-group">
        <label for="Prenom">Prenom</label>
		<input type="text" name="prenom" class="form-control" value="{{$eleve->prenom}}">
    </div>
    <div class="form-group">
        <label for="Genre">Genre</label>
		<input type="radio" name="sexe"  value="{{$eleve->sexe}}" checked="{{ $eleve->sexe ? 'true':'false' }}">H
		<input type="radio" name="sexe" value="{{$eleve->sexe}}" checked="{{ $eleve->sexe ? 'true':'false' }}">F
    </div>
    <div class="form-group">
        <label for="Date_naissance">Date_naissance</label>
		<input type="date" name="date_naissance" class="form-control" value="{{$eleve->date_naissance}}">
    </div>
    <div class="form-group">
        <label for="lieu_naissance">lieu_naissance</label>
		<input type="text" name="lieu_naissance" class="form-control" value="{{$eleve->lieu_naissance}}">
    </div>
    <div class="form-group">
        <label for="Tel">Tel</label>
		<input type="text" name="telephone" class="form-control" value="{{$eleve->telephone}}">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Modifier</button>
	</div>
</form>
</div>
</div>
</div>
</div>


   
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
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Infos</a></li>
                            <li><a href="#">video</a></li>
                            
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





    
<script type='text/javascript' src="{{asset('js/app.js')}}"></script>

	
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Lycee Excelllence</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>
<body class="single-courses-page">
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
                                    <a href="#" class="flex justify-content-center align-items-center">
                                        <span aria-hidden="true" class="icon_bag_alt"></span>
                                    </a>
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
                            <h1 class="entry-title">Identification de l'eleve</h1>

                            <div class="ratings flex justify-content-center align-items-center">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>

                            </div><!-- .ratings -->
                        </header><!-- .entry-header -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .page-header-overlay -->
    </div><!-- .page-header -->
    @if($errors->any())
    @foreach($errors->all as $error)
    <div class="bnt bnt-danger"></div>
    @endforeach
    @endif
    <div class="container-fluid">
        <div><h1>Enregistrement d'un eleve</h1></div>
        <div class="row">
            <div class=" col-lg-6 col-lg-offset-3"  >
                <form action="{{route('eleve.store')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="matricule">Matricule</label>
                        <input type="text" name="matricule" id="matricule" required="matricule" placeholder="matricule"  autofocus class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nom">NOM</label>
                        <input type="text" name="nom" id="nom"  autofocus placeholder="nom"class="form-control" required onkeyup="this.value = this.value.toUpperCase()">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="prenom" autofocus class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Genre</label>
                        <div>
                            <input type="radio" name="sexe" value="H">H
                            <input type="radio" name="sexe" value="F">F
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="date" name="date_naissance" id="date"placeholder="date_naissance"  autofocus class="form-control" required>
                    </div>
                    <div class="form-group">  
                        <input type="text" name="lieu_naissance" id="date"  placeholder="lieu_naissance"autofocus class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="telephone"  placeholder="telephone" value="0" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div><!-- .col -->
        <div class="course-cost">LYCEE D'Excelllence</div>
    </div><!-- .row -->


    <script type='text/javascript' src="{{asset('js/app.js')}}"></script>

</body>
</html>
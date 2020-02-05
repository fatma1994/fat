<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administation</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
                            

                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->
      </header>
    </div>
 
</div>
@if($errors->any())
@foreach($errors->all as $error)
<div class="bnt bnt-danger"></div>
@endforeach
@endif
<div class="container-fluid">
    <div><h1>Enregistrement d\un matiere</h1></div>
     <div class="row">
    <div class=" col-lg-6 col-lg-offset-3"> 
<div class="form-group">
        <form action="{{route('matiere.store')}}" method="post">
    @csrf
    
                     <input type="text" name="libelle" id="nom" required="libelle" placeholder="libelle"  autofocus class="form-control">
                   
                     <input type="text" name="coefficient" id="nom"  autofocus placeholder="coefficient"class="form-control"> 

    <div>
        <button class="btn btn-primary">Enregistrer</button>
    </div>
</form>
</div>
</div>
</div>
</div>

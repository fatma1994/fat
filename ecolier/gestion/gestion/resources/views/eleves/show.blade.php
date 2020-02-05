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
                               

                            
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->
          <div class="container">
  
    <table class="table table-striped">
        <thead>
            <tr>
                <th>matricule</th>
                <th>nom</th>
                 <th>prenom</th>
                  <th>sexe</th>
                  <th>date_naissance</th>
                  <th>lieu_naissance</th>
                  <th>telephone</th>
            </tr>
        </thead>
       
        <tbody>
              @foreach ($eleve as $v)
             <tr>
                <td>{{$v->matricule}}</td>
                <td>{{$v->nom}}</td>
                 <th>{{$v->prenom}}</th>
                  <th>{{$v->sexe}}</th>
                  <th>{{$v->date_naissance}}</th>
                  <th>{{$v->lieu_naissance}}</th>
                  <th>{{$v->telephone}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</div>
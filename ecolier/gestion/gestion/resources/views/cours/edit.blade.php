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
            </div><!-- .top-header-bar --><div class="container-fluid">
	 <div class="row">
      <div class=" col-lg-6 col-lg-offset-3">
      	<form action="{{route('cours_update',['id'=>$cours->id])}}" method="post">
	@csrf
	@method('patch')
	<div class="row form-group" >
		<input type="datetime" name="heure_debut" class="form-control" value="{{$cours->heure_debut}}">
		<input type="datetime" name="heure_fin" class="form-control" value="{{$cours->heure_fin}}">
		<input type="text" name="etat" class="form-control" value="{{$cours->etat}}">
		<input type="text" name="teacher_id" class="form-control" value="{{$cours->teacher_id}}">
		<input type="text" name="classe_id" class="form-control" value="{{$cours->classe_id}}">
		<input type="text" name="matiere_id" class="form-control" value="{{$cours->matiere_id}}">
	</div>
	<div class="row">
		<button class="btn btn-primary">Enregistrer</button>
	</div>
</form>
</div>
</div>
</div>

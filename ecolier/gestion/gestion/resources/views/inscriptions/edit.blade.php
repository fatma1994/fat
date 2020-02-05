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
             
<div class="container-fluid">
    <div class="row">
       <div class=" col-lg-6col-lg-offset-3"  >
          <div class="input-group">
             <form action="{{route('inscriptions_update',['id'=>$inscription->id])}}" method="post">
	          	@csrf
	      	@method('patch')
			<input type="date" name="date_inscrit" placeholder="date_inscrit" class="form-control" value="{{$inscription->date_inscrit}}">
			<input type="text" name="frais_inscription" placeholder="frais_inscription" class="form-control" value="{{$inscription->frais_inscription}}">
			<input type="text" name="annee_academique" placeholder="annee_academique" class="form-control" value="{{$inscription->annee_academique}}">
			<input type="text" name="eleve_id" placeholder="eleve_id" class="form-control" value="{{$inscription->eleve_id}}">
			<input type="text" name="classe_id" placeholder="classe_id" class="form-control" value="{{$inscription->classe_id}}">
             <div class="row">
	     	<button class="btn btn-primary">Enregistrer</button>
	         </div>
             </form>
         </div>
        </div>
     </div>
</div>
</body>
</html>

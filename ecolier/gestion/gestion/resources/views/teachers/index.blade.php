<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lycee d'excellence</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>
<body>
    <div class="hero-content">
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

                        
                    </div><!-- .row -->
                </div><!-- .container-fluid -->
            </div><!-- .top-header-bar -->

            <div class="container">
              <table class="table table-striped">
                <div><p><a href="{{route('teachers_create')}}" class="btn btn-suceess">{{('Enregistrement d\un teacher')}}</a></p></div>
                <div><p><a href="{{'pedagogique'}}" class="btn btn-suceess">{{('pedagogique')}}</a></p></div>
                <tr>
                  <th>#</th>

                  <th>nom</th>
                  <th>prenom</th>
                  <th>email</th>
                  <th>telephone</th>
                  <th></th>
                </tr>
                @foreach ($teacher as $v)
                <tr>
                  <th>{{ $loop->iteration }}</th>
                  <th>{{$v->nom}}</th>
                  <th>{{$v->prenom}}</th>
                  <th>{{$v->email}}</th>
                  <th>{{$v->telephone}}</th>

                  <th>
                    @if (Auth::user()->role == 'admin')
                    <p><a href="{{route('teachers_edit',['id'=>$v->id])}}" ><i class="fa fa-pencil fa-3x text-warning icon-2x"></i>
                    </a></p>
                    <th>
                     <form action="teacher/{{$v->id}}" method="post">
                      @csrf
                      @method('delete')
                       <button type="submit" name="choixbestiole"  value=""class="fa fa-trash fa-3x text-danger btn btn-dander" onclick="var aze=confirm('Êtes-vous sûr de votre choix ?');return aze;"></button> 

                    </form>
                  </p>
                  @endif
                </th>
              </tr>
              @endforeach

            </table>
          </div>


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

            <div class="container">

             <table class="table table-stripe">
              <div><p><a href="{{route('classes_create')}}" class="btn btn-suceess" >{{('Enrengistrer classe')}}></a></p>
                <div><p><a href="{{'serie'}}" class="btn btn-success" >{{('Serie')}}</a></p><p><a href="{{'niveau'}}" class="btn btn-success" >{{('Niveau')}}</a></p></div></div>
                <div><p><a href="{{'administration'}}" class="btn btn-suceess" >{{('admistration')}}</a></p></div>
                <tr>
                 <th>#</th>
                 <th>libellé</th>
                 <th>serie</th>
                 <th>niveau</th>
                 <th></th> <th></th>
               </tr>
               @foreach ($classe as $v)
               <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{$v->libellé}}</a></th>
                <th><a href="{{'Serie'}}">{{$v->serie->code}}</a></th>
                <th><a href="{{'niveau'}}">{{$v->niveau->code}}</a></th>
                <th>
                  @if (Auth::user()->role =='admin')
                  <p><a href="{{route('classes_edit',['id'=>$v->id])}}"><i class="fa fa-pencil fa-3x text-warning icon-2x"></i></a>
                  </th>
                  <th>

                    <form action="classe/{{$v->id}}" method="delete">
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

 
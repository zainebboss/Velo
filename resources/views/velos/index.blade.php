@extends('layouts.master')
@section('menu')
@extends('sidebar.form_staff')
@endsection
@section('content')

<link href={{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />

<link rel="stylesheet" href="/css/app.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href={{ asset("bootstrap/css/sticky-footer-navbar.css") }} rel="stylesheet" />

<!-- Optional theme -->
<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}">

<div class="container border border-primary" style="margin:350px">
    <div class="row my-4">
        <div class="col-md-3">
            <div class="card bg-light border border-primary">
                <h3 class="card-header"> Recherche </h3>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="search">Recherche</label>
                            <input type="text" name="search" id="" class="form-control"
                                placeholder="Recherche..."></input>
                        </div>


                        <!--<form action="#" method="post">-->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-6">
        <div class="card border border-primay">
            <h3 class="card-header">Toutes les velos</h3>
            <div class="card-body">
                @foreach($velos as $velo)
                <div class="media mb-2 border-bottom-3">
                    <div class="media-left">
                        <img src="{{$velo->image}}" width="100" heigth="100" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="media-body">

                        <h3 class="text-info">
                            <a href="{{route('Velos.show', $velo->id)}}" class="btn btn-link" style="color:blue">
                                {{$velo->marque}}</a>

                        </h3>
                        <p class="d-flex flex-row justify-content-start">
                            <span class="badge badge-danger mx-3" style="color:black"> Type: {{$velo->type}}</span>
                        </p>
                        <span class="badge badge-primary mr-3" style="color:red">Prix journee: {{$velo->prixJ}}
                            $ Dinar</span>
                        @if($velo->dispo)
                        <span class="badge badge-success" style="color:green">Disponible</span>
                        @else
                        <span class="badge badge-warning" style="color:#AD9C20">Reserve</span>

                        @endif

                        </p>

                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>




</div>

</div>




@endsection
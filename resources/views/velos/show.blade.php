@extends('layouts.master')

@section('content')

<!-- Bootstrap core CSS -->
<link href={{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
<div class="container border border-primary" style="margin-top:120px">
    <div class="row my-4">
        <div class="col-md-3">
            <div class="card bg-light border border-primary">
                <h3 class="card-header"> Recherche </h3>
                <div class="card-body">
                    <form action="{{route('velos.index')}}" method="post">
                        @csrf
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
            <h3 class="card-header" style="color:green">{{$velo->marque}}</h3>
            <div class="card-img-top">
                <img src="{{$velo->image}}" class="img-fluid rounded" p-2 alt="aaaa">
            </div>

            <div class="card-body">

                <p class="d-flex flex-row justify-content-start">
                    <span class="badge badge-danger mx-3" style="color:black"> Type: {{$velo->type}}</span>
                </p>
                <span class="badge badge-primary mr-3" style="color:red">Prix journee: {{$velo->prixJ}} $ Dinar</span>
                @if($velo->dispo)
                @auth
                <p><a href="{{ url('/Commands/create') }}"" class="btn btn-primary">Resserver </a></p>
                @else
                <p><a href="{{route('auth.login')}}" class="btn btn-primary">Resserver </a></p>
                @endauth
                @endif

                </p>

            </div>
        </div>
    </div>




</div>

</div>




@endsection
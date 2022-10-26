@extends('layouts.master')
@section('menu')

@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <header class="card-header">

        </header>
        <div class="card-content">
            <div class="content">
                <form method="post" action="{{ route('activitie.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nameactivitie">Titre activitie</label>
                        <input type="texte" class="form-control" id="nameactivitie"
                               placeholder="Nom de activitie" name="nameactivitie">


                    </div>
                    <div class="form-group">
                        <label for="pays">detail</label>
                        <input type="texte" class="form-control" id="detail"
                               placeholder="Nom de activitie" name="detail">

                    </div>
                  
                



                   

                 
                 
                 
                    <br>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Titre : {{ $activitie->nameactivitie}}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Detail: {{ $activitie->detail }}</p>
             
                
            </div>
        </div>
    </div>
@endsection

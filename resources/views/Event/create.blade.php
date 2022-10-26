@extends('layouts.master')
@section('menu')
    @extends('sidebar.dashboard')
@endsection
@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Input Information</h3>
                    <p class="text-subtitle text-muted">form information</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Input</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        {{-- message --}}
        {!! Toastr::message() !!}

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
                <form method="post" action="{{ route('event.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nameevent">Titre event</label>
                        <input type="texte" class="form-control" id="nameevent"
                               placeholder="Nom de event" name="nameevent">


                    </div>
                    <div class="form-group">
                        <label for="pays">pays</label>
                        <textarea class="form-control" id="pays" rows="3" name="pays"></textarea>

                    </div>
                    <div class="form-group">
                        <label for="ville">ville</label>
                        <textarea class="form-control" id="ville" rows="3" name="ville"></textarea>

                    </div>
               
                    <div class="form-group">
                        <label for="dateDebutEvent">dateDebutEvent</label>
                        <input  type="date" class="form-control" id="dateDebutEvent" rows="3" name="dateDebutEvent"></input>

                    </div>
                    <div class="form-group">
                        <label for="dateFinEvent">dateFinEvent</label>
                        <input  type="date" class="form-control" id="dateFinEvent" rows="3" name="dateFinEvent"></input>

                    </div>

                    <div class="form-group">
                        <label for="timeevent">Time Event</label>
                        <input  type="time" class="form-control" id="timeevent" rows="3" name="timeevent"></input>

                    </div>
                    <div class="field">
                        <label class="label">Activities</label>
                        <div class="select">
                            <select name="activity_id">
                                @foreach($activities as $activity)
                                    <option value="{{ $activity->id }}">
                                        {{ $activity->nameactivitie }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                   

                    <div class="form-group">
                        <label for="telResponsable">telResponsable</label>
                        <input type="number" class="form-control" id="telResponsable" name="telResponsable">

                    </div>
                 
                 
                    <br>

                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2021 &copy; Soeng Souy</p>
                </div>
                <div class="float-end">
                    <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="http://soengsouy.com">Soeng Souy</a></p>
                </div>
            </div>
        </footer>
    </div>
@endsection
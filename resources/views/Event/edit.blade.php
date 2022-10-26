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
        <div class="col-12">
            <div class="card">
        </header>
        <div class="card-content">
            <div class="content">
            <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Latest Comments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                <form action="{{ route('event.update',$event) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nameevent">Titre d'evenement</label>
                        <input type="texte" class="form-control" id="nameevent"
                               value="{{ old('nameevent', $event->nameevent) }}" name="nameevent">

                    </div>
                  

                    <div class="form-group">
                        <label for="telResponsable">Num Responsable</label>
                        <input type="number" class="form-control" id="telResponsable" name="telResponsable" value="{{ old('telResponsable', $event->telResponsable) }}">
                    </div>

                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="string" class="form-control" id="ville" name="ville" value="{{ old('ville', $event->ville) }}">
                    </div>
                    <div class="form-group">
                        <label for="pays">Pays</label>
                        <input type="string" class="form-control" id="pays" name="pays" value="{{ old('pays', $event->pays) }}">
                    </div>
                    <div class="form-group">
                        <label for="dateDebutEvent">Date Debut</label>
                        <input type="date" class="form-control" id="dateDebutEvent" name="dateDebutEvent" value="{{ old('dateDebutEvent', $event->dateDebutEvent) }}">
                    </div>

                    <div class="form-group">
                        <label for="dateFinEvent">Date Fin</label>
                        <input type="date" class="form-control" id="dateFinEvent" name="dateFinEvent" value="{{ old('dateFinEvent', $event->dateFinEvent) }}">
                    </div>
                    <div class="form-group">
                        <label for="timeevent">Time </label>
                        <input type="time" class="form-control" id="timeevent" name="timeevent" value="{{ old('timeevent', $event->timeevent) }}">
                    </div>
                    </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
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

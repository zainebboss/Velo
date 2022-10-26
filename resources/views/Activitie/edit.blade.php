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
    <div class="card">
        <header class="card-header">

        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('activitie.update',$activitie) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nameactivitie">Activitie d'evenement</label>
                        <input type="texte" class="form-control" id="nameactivitie"
                               value="{{ old('nameactivitie', $activitie->nameactivitie) }}" name="nameactivitie">

                    </div>
                  

                    

                    <div class="form-group">
                        <label for="detail">Detail</label>
                        <input type="string" class="form-control" id="detail" name="detail" value="{{ old('detail', $activitie->detail) }}">
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
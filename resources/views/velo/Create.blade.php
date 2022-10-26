@extends('layouts.master')
@section('menu')
@extends('sidebar.form_staff')
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
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Input Information</h4>
            </div>
            <div class="card-content">
                <div class="card-body">

                    <form method="POST" action="{{ route('Velos/add/save') }}" class="md-float-material" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                            <div class="col-md-4">
                                    <label>Image Velo</label>
                                </div>
                       
                                <div class="col-md-8">
                        <div class="form-group position-relative has-icon-left">
                        <div class="position-relative">    
                        <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="image" multiple="">
                            <div class="form-control-icon">
                                <i class="bi bi-person-square"></i>
                        
                            </div>
                            </div>
                            </div>
                            
                            <div class="col-md-4">
                                    <label>Categorie</label>
                                </div>
                                <div class="col-md-8">
                            <select name='categorie_id' id='categorie_id' class="form-select" aria-label="Default select example">
                                @foreach($categories as $categorie)
                                    <option  value="{{ $categorie->id }}">
                                        {{ $categorie->name }}</option>
                                @endforeach
                            </select>
                        </div>
</div>
                    

            
                        <div class="col-md-4">
                                    <label>Prix</label>
                                </div>
                                <div class="col-md-8">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="number" class="form-control form-control-lg @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" placeholder="Enter Votre prix">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('prix')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>      
                            </di>
                        <div class="col-md-4">
                                    <label>Libelle</label>
                                </div>
                                <div class="col-md-8">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-lg @error('libelle') is-invalid @enderror" name="libelle" value="{{ old('libelle') }}" placeholder="Enter libelle">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('libelle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                            </div>
                            <div class="col-md-4">
                                    <label>Etat</label>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-check form-check-inline form-control-lg">
                                        <input class="form-check-input" type="radio" name="etat" value="occasion" id="occasion">
                                        <label class="form-check-label" for="occasion">occasion</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="etat" value="new" id="new">
                                        <label class="form-check-label" for="new">new</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="etat" value="Other" id="other">
                                        <label class="form-check-label" for="Other">Other</label>
                                    </div>
                                </div>

                        

                        

                       

                        
                        <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Cannel</button>
                                </div>
                        </div>
                        </div>
                    </form>
                
           
                    </div>
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



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
                <div class="card-header">
                    <h4 class="card-title">Input Information</h4>
                </div>
                <div class="card">
                    <div class="card-header">Contactus Page</div>
                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">associationus Page</div>
                            <div class="card-body">

                                <form action="{{ url('Associations/' .$associations->id) }}" method="post">
                                    {!! csrf_field() !!}
                                    @method("PATCH")
                                    <input type="hidden" name="id" id="id" value="{{$associations->id}}" id="id" />
                                    <label>Name</label></br>
                                    <input type="text" name="association_name" id="association_name" value="{{$associations->association_name}}" class="form-control"></br>
                                    <label>Address</label></br>
                                    <input type="text" name="association_adress" id="association_adress" value="{{$associations->association_adress}}" class="form-control"></br>
                                    <input type="submit" value="Update" class="btn btn-success"></br>
                                </form>

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


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
            <p class="card-header-title">List Activitie</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable" border="1">
                    <thead class=" text-primary">
                    <tr>
                      
                        <th>Title</th>
                       
                        <th>Detail</th>
                        <th>Actions</th>
                        
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($activities as $activitie)
                        <tr>
                         
                            <td>{{$activitie->nameactivitie}}</td>
                         
                            <td>{{$activitie->detail}}</td>
                       

                            <td>
                               
                                <a href="{{ route('activitie.edit',$activitie->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
                                <form action="{{ route('activitie.destroy',$activitie->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete association" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>  </form>


                                </form>


                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

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
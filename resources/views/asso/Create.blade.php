
@extends('asso.layout')
@section('content')
    <div class="card">
        <div class="card-header">Contactus Page</div>
        <div class="card-body">

            <form action="{{ url('Associations') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="association_name" id="association_name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="association_adress" id="association_adress" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop

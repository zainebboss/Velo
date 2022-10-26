@extends('layouts.master')

@section('content')
<div class="row my-4">
    <div class="col-md-8 mx-auto">
  <div class="card border border-primary shadow-sm">
    <h3 class="card-header">Louer cette velo</h3>
    
    <div class="card-body">
        <form action="{{route('commands.store')}}" method="post">
         
         @csrf
        <div class="form-group">
            <label for="dateL">Date Debut</label>
        <input type="date" name="dateL" id="" class="form-control" placeholder="Date Debut..." aria-describedby="helpId">
        </div>

        <div class="form-group">
            <label for="dateR">Date Fin</label>
        <input type="date" name="dateR" id="" class="form-control" placeholder="Date Fin..." aria-describedby="helpId">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </form>
    </div>
  </div>
    </div>



</div>
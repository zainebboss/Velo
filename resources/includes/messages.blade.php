@if (session::get('success'))
<div class="alert  alert-success">
{{ Session::get('success')}}
</div>
@endif

@if (session::get('info'))
<div class="alert  alert-info">
{{ Session::get('info')}}
</div>
@endif 

@if (session::get('error'))
<div class="alert  alert-success">
{{ Session::get('error')}}
</div>
@endif

@if ($errors->all() > 0))
@foreach($errors->all() as $error)
<div class="alert alert-danger">
    {{$error}}
</div>
@endif
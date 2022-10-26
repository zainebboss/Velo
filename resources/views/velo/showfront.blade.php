@extends('layouts.master')

@section('content')
<header class="sticky-top navigation">
  <div class=container>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
      <a class=navbar-brand href="index.html"><img class="img-fluid" src="images/logo.png" alt="godocs"></a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation">
        <i class="ti-align-right h4 text-dark"></i></button>
      <div class="collapse navbar-collapse text-center" id=navigation>
        <ul class="navbar-nav mx-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="list.html">Inner Page</a></li>
          <li class="nav-item"><a class="nav-link" href="search.html">Search Page</a></li>
        </ul>
        <a href="changelog.html" class="btn btn-sm btn-outline-primary ml-lg-4">changelog</a>
        <a href="contact.html" class="btn btn-sm btn-primary ml-lg-4">contact</a>
      </div>
    </nav>
  </div>
</header>

<!-- banner -->
<section class="section pb-0">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-7 text-center text-lg-left">
        <h1 class="mb-4">Documentation Theme By Themefisher Team</h1>
        <p class="mb-4">Lorem ipsum dolor amet, consetetur sadiffspscing elitr, diam nonumy invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua At.</p>
        <form class="search-wrapper" action="search.html">
          <input id="search-by" name="s" type="search" class="form-control form-control-lg"
            placeholder="Search Here...">
          <button type="submit" class="btn btn-primary">Search</button>
        </form>
      </div>
      
    </div>
  </div>
</section>
<!-- /banner -->

<!-- topics -->
<section class="section pb-0">
  <div class="container">
    <h2 class="section-title">Browse Your Topics</h2>
    <div class="row">
      <!-- topic -->
      @foreach($velos as $item)
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="card match-height">
          <div class="card-body">
          <img src="{{ URL::to('/images/'.$item->image) }}"  class="img w-100 rounded mx-auto d-block" alt="{{ $item->image }}">
            <i class="card-icon ti-panel mb-4"></i>
            <h3 class="card-title h4">{{ $item->etat}}</h3>
            <p class="card-text">{{ $item->libelle}}</p>
            <p class="card-text">{{ $item->prix}}</p>
            <a href="list.html" class="stretched-link"></a>
          </div>
        </div>
      </div>
      @endforeach
 
<!-- /topics -->


<!-- /call to action -->

<footer>
  <div class="container">
    <div class="row align-items-center border-bottom py-5">
      <div class="col-lg-4">
        <ul class="list-inline footer-menu text-center text-lg-left">
          <li class="list-inline-item"><a href="changelog.html">Changelog</a></li>
          <li class="list-inline-item"><a href="contact.html">contact</a></li>
          <li class="list-inline-item"><a href="search.html">Search</a></li>
        </ul>
      </div>
      <div class="col-lg-4 text-center mb-4 mb-lg-0">
        <a class="navbar-brand" href="index.html">
          <img class="img-fluid" src="images/logo.png" alt="Hugo documentation theme">
        </a>
      </div>
      <div class="col-lg-4">
        <ul class="list-inline social-icons text-lg-right text-center">
          <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="py-4 text-center">
      <small class="text-light">Copyright © 2020 a hugo theme by <a href="https://themefisher.com">themefisher</a></small>
    </div>
  </div>
</footer>
@endsection
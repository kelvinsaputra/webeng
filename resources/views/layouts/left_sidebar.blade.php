@extends('layouts.master')
@section('left_sidebar')
<div class="sidebar-sticky">
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link active" href="#">
        <span data-feather="file"></span>
        Customer List
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span data-feather="home"></span>
        Dashboard <span class="sr-only">(current)</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span data-feather="shopping-cart"></span>
        Recently Modified
      </a>
    </li>
  </div>
@endsection
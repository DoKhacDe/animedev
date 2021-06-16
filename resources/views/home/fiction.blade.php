@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: -20px; padding:0;">
    <nav class="navbar navbar-dark shadow-sm">
        <div class="container-fluid">
            <div class=" navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-tabs justify-content-center">
                    <li><a class="active" href="{{ route('home') }}">Home</a></li>
                    <li>
                        <div class="dropdown">
                        <a class="dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Anime</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('home.action') }}">Action</a>
                            <a class="dropdown-item" href="{{ route('home.school') }}">School</a>
                            <a class="dropdown-item" href="{{ route('home.sad') }}">Sad</a>
                            <a class="dropdown-item" href="{{ route('home.honnor') }}">Honner</a>
                            <a class="dropdown-item" href="{{ route('home.fiction') }}">Fiction</a>
                        </div>
                        </div>
                    </li>
                    <li><a class="active" href="#">Status</a></li>
                    <li><a class="active" href="#">News</a></li>
                    <li><a class="active" href="#">Years</a></li>
                    <li><a class="active" href="#">Feedback</a></li>
                    <li><a class="active" href="#">Services</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="album py-5 bg-dark">
    <div class="container">
       
    <h3 style="color:white;font-weight:bold;">FICTION</h3>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 row-cols-md-5 g-5">
          @foreach ($listmovie as $res)
        <div class="col" style="padding-top: 50px;">
          <div class="card shadow-sm" style="height: 320px;">
            <div class="feature-box1">
                    <a href="#">
                        <img src="{{ asset('img/img-movie/' . $res->image) }}">                    
                    </a>        
            </div>  
            <div class="card-body">
              <p class="card-text" style="color:black; width:196px;text-align:center;margin-left:-25px "><a class="name-movie1" href="">{{ $res->name_movie }}</a></p>
              
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    </div>
</div>
@endsection

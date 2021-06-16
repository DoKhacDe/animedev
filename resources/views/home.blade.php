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
                        <a class="dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>Anime</a>
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
    <div class="silde-banner">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/yourname.jpg') }}" class="d-block w-100 img-fluid" alt="Los Angeles">
                    <div class="carousel-caption">
                        <h3>Your Name</h3>
                        <hr style="border: 2px solid #FFFF99; width:300px">
                        <div class="content-button">
                            <button class="featured--watchbutton" type="button"><img src="{{ asset('img/icons/play.svg') }}">Play</button>
                            <button class="featured--mylistbutton" type="button"><img src="{{ asset('img/icons/plus.svg') }}">Add</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/justbecause.jpg') }}" alt="Chicago">
                    <div class="carousel-caption">
                        <h3>Just because</h3>
                        <hr style="border: 2px solid #FFFF99; width:300px">
                        <div class="content-button">
                            <button class="featured--watchbutton" type="button"><img src="{{ asset('img/icons/play.svg') }}">Play</button>
                            <button class="featured--mylistbutton" type="button"><img src="{{ asset('img/icons/plus.svg') }}">Add</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/demoslayerb.png') }}" alt="New York">
                    <div class="carousel-caption">
                        <h3>Demo Slayer</h3>
                        <hr style="border: 2px solid #FFFF99; width:300px">
                        <div class="content-button">
                            <button class="featured--watchbutton" type="button"><img src="{{ asset('img/icons/play.svg') }}">Play</button>
                            <button class="featured--mylistbutton" type="button"><img src="{{ asset('img/icons/plus.svg') }}">Add</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/helloworld.jpg') }}" alt="New York">
                    <div class="carousel-caption">
                        <h3>Hello world</h3>
                        <hr style="border: 2px solid #FFFF99; width:300px">
                        <div class="content-button">
                            <button class="featured--watchbutton" type="button"><img src="{{ asset('img/icons/play.svg') }}">Play</button>
                            <button class="featured--mylistbutton" type="button"><img src="{{ asset('img/icons/plus.svg') }}">Add</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/totoro.jpg') }}" alt="New York">
                    <div class="carousel-caption">
                        <h3>Totoro</h3>
                        <hr style="border: 2px solid #FFFF99; width:300px">
                        <div class="content-button">
                            <button class="featured--watchbutton" type="button"><img src="{{ asset('img/icons/play.svg') }}">Play</button>
                            <button class="featured--mylistbutton" type="button"><img src="{{ asset('img/icons/plus.svg') }}">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="container">
     <div class="content-list-tilte">
        <h3>Action</h3>
        <a href="{{ route('home.action') }}">view all</a>
    </div>   
    <div class="owl-carousel owl-theme" >        
            @foreach ($action as $res)
                <div class="item">
                    <div class="feature-box">
                        <a href="#">
                            <img src="{{ asset('img/img-movie/' . $res->Image) }}">                    
                        </a>
                         
                    </div> 
                     <p style="margin-top: 0px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">{{ $res->NameMovie }}</a></p>            
                </div>    
            @endforeach
    </div>
    
    <div class="content-list-tilte">
        <h3>School</h3>
        <a href="{{ route('home.school') }}">view all</a>
    </div>
    
    <div class="owl-carousel owl-theme" >        
            @foreach ($school as $res)
                <div class="item">
                    <div class="feature-box">
                        <a href="#">
                            <img src="{{ asset('img/img-movie/' . $res->Image) }}">                    
                        </a>
                         
                    </div> 
                     <p style="margin-top: 0px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">{{ $res->NameMovie }}</a></p>            
                </div>    
            @endforeach
    </div>

    <div class="content-list-tilte">
        <h3>Sad</h3>
        <a href="{{ route('home.sad') }}">view all</a>
    </div>
    
    <div class="owl-carousel owl-theme" >        
            @foreach ($sad as $res)
                <div class="item">
                    <div class="feature-box">
                        <a href="#">
                            <img src="{{ asset('img/img-movie/' . $res->Image) }}">                    
                        </a>
                         
                    </div> 
                     <p style="margin-top: 0px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">{{ $res->NameMovie }}</a></p>            
                </div>    
            @endforeach
    </div>

    <div class="content-list-tilte">
        <h3>Honnor</h3>
        <a href="{{ route('home.honnor') }}">view all</a>
    </div>
    
    <div class="owl-carousel owl-theme" >        
            @foreach ($honnor as $res)
                <div class="item">
                    <div class="feature-box">
                        <a href="#">
                            <img src="{{ asset('img/img-movie/' . $res->Image) }}">                    
                        </a>
                         
                    </div> 
                     <p style="margin-top: 0px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">{{ $res->NameMovie }}</a></p>            
                </div>    
            @endforeach
    </div>

    <div class="content-list-tilte">
        <h3>Fiction</h3>
        <a href="{{ route('home.fiction') }}">view all</a>
    </div>
    
    <div class="owl-carousel owl-theme" >        
            @foreach ($fiction as $res)
                <div class="item">
                    <div class="feature-box">
                        <a href="#">
                            <img src="{{ asset('img/img-movie/' . $res->Image) }}">                    
                        </a>
                         
                    </div> 
                     <p style="margin-top: 0px;color:white; position:relative;width:180px; text-align:center"><a class="name-movie" href="">{{ $res->NameMovie }}</a></p>            
                </div>    
            @endforeach
    </div>
    <div >
        
        <video width="700" controls>
        <source src="../video/withyou.mp4" type="video/mp4">
        </video>
    </div>
    <video width="400" controls>
        <source src="https://webvn.com/wp-content/uploads/2014/12/mov_bbb.mp4" type="video/mp4">
        <source src="https://webvn.com/wp-content/uploads/2014/12/mov_bbb.ogg" type="video/ogg">
        Trình duyệt của bạn không hỗ trợ thẻ video trong HTML5.
    </video>
   
</div>
</div>
@endsection

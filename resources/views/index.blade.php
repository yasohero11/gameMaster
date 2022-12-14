@extends('layouts.mainLayout')



@section('links')
<link href="{{asset('assets/css/platformPicker.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset("assets/css/style.css")}}" rel="stylesheet" type="text/css" >     
@endsection
    
@section('content')
@include('includes._chooses')    


            <div id="demo" class="carousel slide" data-ride="carousel">

                <div class="continer" id="news-feed">
                    <h1 class="display-2" style="color: white">Latest Games</h1>
                    <hr style=" border:0.1px #D3006D solid;">
                    <div class="row justify-content-center text-center ">

                        <a href="game/5" class="hot-news">
                            <img src="{{asset('assets/img/minecraft.png')}}">
                        </a>


                        <a href="game/2" class="hot-news">
                            <img src="{{asset('assets/img/PS4.jpg')}}">
                        </a>

                        <a href="game/4" class="hot-news">
                            <img src="{{asset('assets/img/RE3N0MZ.jpg')}}">
                        </a>


                        <a href="game/3" class="hot-news">
                            <img src="{{asset('assets/img/mario.jpg')}}">
                        </a>


                        <a href="/game/1" class="hot-news">
                            <img src="{{asset('assets/img/dark.jpg')}}">
                        </a>


                        <a href="game/6" class="hot-news">
                            <img src="{{asset('assets/img/play.jpg')}}">
                        </a>

                    </div>
                </div>
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0"></li>
                    <li data-target="#demo" data-slide-to="1" class="active"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item ">
                        <img src="{{asset('assets/img/video-game.jpg')}}" alt="Los Angeles">

                    </div>
                    <div class="carousel-item active">
                        <img src="{{asset('assets/img/firstlook.gif')}}" alt="Los Angeles">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{asset('assets/img/heli.jpg')}}" alt="New York">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>

            <div class="container-fluid padding" id="look" style="padding: 0px; margin: 0px; ">
                <div class="row" style="margin: 0px; padding: 0px;">
                    <div class="col-md-4">
                        <div class="contant" id="look1">
                            <div class="hide-on-hover">
                                <h3 class="hidecontent">Gen 2 Cloud</h3>
                                <p class="hidecontent">Oracle Cloud Infrastructure combines the elasticity and utility of <br> public cloud with the granular control, security, and predictability <br> of on-premise infrastructure.</p>
                            </div>

                            <div class="sub-contant">
                                <div class="show-on-hover">
                                    <h3>Gen 2 Cloud</h3>
                                    <button onclick="window.location.href = '../game/10'" type="button" class="btn btn-success">Play</button>
                                    <hr style="background: white;">
                                    <button onclick="window.location.href = '../game/10'" type="button" class="btn btn-secondary">Sesson Pass</button><br>
                                    <p>Analyst report: The business value of Cloud 2.0<br> Oracle Cloud Day 2020: Your World, Your Business, Your Datax</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contant" id="look2">
                            <div class="hide-on-hover">
                                <h3 class="hidecontent">Gen 2 Cloud</h3>
                                <p class="hidecontent">Oracle Cloud Infrastructure combines the elasticity and utility of <br> public cloud with the granular control, security, and predictability <br> of on-premise infrastructure.</p>
                            </div>

                            <div class="sub-contant">
                                <div class="show-on-hover">
                                    <h3>Gen 2 Cloud</h3>
                                    <button onclick="window.location.href = '../game/10'" type="button" class="btn btn-success">Play</button>
                                    <hr style="background: white;">
                                    <button onclick="window.location.href = '../game/2'" type="button" class="btn btn-secondary">Sesson Pass</button><br>
                                    <p>Analyst report: The business value of Cloud 2.0<br> Oracle Cloud Day 2020: Your World, Your Business, Your Datax</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="demo2" class="carousel slide" data-ride="carousel">


                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <li data-target="#demo2" data-slide-to="0" class="active"></li>
                                <li data-target="#demo2" data-slide-to="1"></li>
                                <li data-target="#demo2" data-slide-to="2"></li>
                            </ul>

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{asset('assets/img/mega.jpg')}}" alt="Los Angeles">
                                    <div class="carousel-caption">
                                        <p>Dowenload the gaame now please please please Dowenload the gaame now please please please</p>
                                        <button onclick="window.location.href = '../game/8'" type="button" class="btn btn-success">Play</button>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{asset('assets/img/tomb.jpeg')}}" alt="Chicago">
                                    <div class="carousel-caption">
                                        <p>Dowenload the gaame now please please please Dowenload the gaame now please please please</p>
                                        <button type="button" onclick="window.location.href = '../game/7'" class="btn btn-success">Play</button>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img  src="{{asset('assets/img/fifa.jpg')}}" alt="New York">
                                    <div class="carousel-caption">
                                        <p>Dowenload the gaame now please please please Dowenload the gaame now please please please</p>
                                        <button onclick="window.location.href = '../game/9'" type="button" class="btn btn-success">Play</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="container" id="consoles">
                <div class="row justify-content-center text-center">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card bg-success">
                            <i class="fab fa-xbox"></i>
                            <div class="card-body text-center">
                                <p class="card-text">Some text inside the third card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card" style="background:  #2C32B6;  ">
                            <i class="fab fa-playstation"></i>
                            <div class="card-body text-center">
                                <p class="card-text">Some text inside the second card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="card bg-danger">
                            <span>PC</span>
                            <div class="card-body text-center">
                                <p class="card-text">Some text inside the fourth card</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container-fluid">
                <div class="row justify-content-center">

                    <div class="col-md-4 on-hover-move">
                        <img class="img-fluid" src="{{asset('assets/img/destiny.png')}}">
                    </div>

                    <div class="col-md-3"></div>
                    <div class="col-md-4 on-hover-move">
                        <img class="img-fluid" src="{{asset('assets/img/dest.png')}}">
                    </div>
                </div>
            </div>

            <div class="continer-fluid" id="description">
                <div class="row justify-content-center">

                    <div class="col-md-4 text-description">
                        <h3 class="display-4" style="margin-bottom: 50px;">Unlimited games</h3>
                        <h4> Play your games</h4>
                        <p>Easily download, install and play all of your Ubisoft PC games in one location.</p>
                        <h4>Explore new worlds</h4>
                        <p>Pick from an extensive list of Betas, Trials, and Free Weekends to experience our PC games first-hand</p>
                        <h4>Browse dedicated content</h4>
                        <p>Stay up to date with all the latest news from your Ubisoft games and enjoy original curated PC content.</p>

                        </h4>
                    </div>

                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset('assets/img/ubisoft.jpg')}}">
                    </div>

                </div>

            </div>

            <div class="container-fluid padding">
                <div class="row welcome text-center justify-content-center" id="goToContiner">
                    <div class="col-12">
                        <div id="goTo">
                            <h1 class="display-4">SEE ALL AVAILABLE GAMES</h1>
                            <button onclick="window.location.href = '../games'" style="border-radius: 200px;padding: 0px" type="button" class="btn btn-outline-dark btn-lg"><i
              style="font-size: 200px" class="fas fa-chevron-circle-right"></i>
          </button>
                        </div>

                    </div>
                </div>
            </div>

      
            @endsection
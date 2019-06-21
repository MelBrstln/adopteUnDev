<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head >
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title >Laravel</title >

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" >

    <!-- Styles -->
    <link
        rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" >
    <style >

        .loginBody
        {
            background-image: {{asset("/images/3214.jpg")}};

        }
        html, body {
            background-image: {{asset("/images/3214.jpg")}};
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            position: relative;
            top: 40px;
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        form {
            position: relative;
            left: 250px;
            border: solid #1b1e21 thick;
            width: 300px;
            padding-bottom: 30px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .btn.btn-mauvelous {
            background-color: lightskyblue;
            color: #fff;

        }
        .carousel {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #333;
        }
        .carousel .item {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
        }
        .carousel .slide-in {
            -webkit-transform: translate3d(-100%, 0px, 0px);
            -moz-transform: translate3d(-100%, 0px, 0px);
            -ms-transform: translate3d(-100%, 0px, 0px);
            -o-transform: translate(-90%, 0px);
            transform: translate3d(-90%, 0px, 0px);
            -webkit-transition: -webkit-transform 0.2s ease-out;
            -moz-transition: -moz-transform 0.2s ease-out;
            -o-transition: -o-transform 0.2s ease-out;
            transition: transform 0.2s ease-out;
            z-index: 1;
        }

        .carousel .slide-in:target ~ .slide-in {
            -webkit-transform: translate3d(90%, 0px, 0px);
            -moz-transform: translate3d(90%, 0px, 0px);
            -ms-transform: translate3d(90%, 0px, 0px);
            -o-transform: translate(90%, 0px);
            transform: translate3d(90%, 0px, 0px);
        }

        .carousel .slide-in:target {
            -webkit-transform: translate3d(0px, 0px, 0px);
            -moz-transform: translate3d(0px, 0px, 0px);
            -ms-transform: translate3d(0px, 0px, 0px);
            -o-transform: translate(0px, 0px);
            transform: translate3d(0px, 0px, 0px);
            z-index: 3;
        }

        .carousel .slide-in:target .slide-in {
            z-index: 5;
        }
        .carousel .controls {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            z-index: 5;
        }

        .carousel .controls .btn {
            display: inline-block;
            background-color: #fff;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            border-radius: 100%;
            width: 12px;
            height: 12px;
            vertical-align: middle;
            margin: 0 1px 15px;
            opacity: 0.7;
        }

        .carousel .controls .btn:hover {
            opacity: 0.9;
        }

    </style >
</head >
<body class = "loginBody">
<div class="flex-center position-ref full-height" >
    @if (Route::has('login'))
        <div class="top-right links" >
            @auth
                <a href="{{ url('/home') }}" >Home</a >
            @else
                <a href="{{ route('login') }}" >Login</a >

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" >Register</a >
                @endif
            @endauth
        </div >
    @endif

    <div class="content" >
        <div class="title m-b-md" >
            Adopte Un Dev
        </div >

        <form id="register-form" class="register excluded-bind-register" >
            <h1 >Inscription express</h1 >
            <p class="register-fast" >Un dev tout de suite</p >
            <div class="slider-register-form" >
                <div class="slider-register-form-row" >

                </div >
                <div class="slider-register-form-row" >


                </div >
                <div class="slider-register-form-row" >
                    <label class="input-register input-register-dark input-register-messages" >
                        <input
                            name="email" id="email" type="text" class="input-register-input input-register-text"
                            placeholder="adresse mail" >
                    </label >
                </div >
            </div >
            <div >
                <button id="btn-register-form" type="submit" class="btn btn-full btn-mauvelous btn-general" >c'est
                    parti!
                </button >
            </div >
        </form >



        <div class="links" >
            <a href="/tasks" >Taches</a >
            <a href="https://laracasts.com" >Laracasts</a >
            <a href="https://laravel-news.com" >News</a >
            <a href="https://blog.laravel.com" >Blog</a >
            <a href="https://nova.laravel.com" >Nova</a >
            <a href="https://forge.laravel.com" >Forge</a >
            <a href="https://github.com/laravel/laravel" >GitHub</a >
        </div >
    </div >
</div >

<div class="carousel">

		--><div class = "item slide-in" id="item1"><img src="{{asset('images/Richard.jpg')}}" width="150" alt="rich" /></div><!--
		--><div class = "item slide-in" id="item2"><img src="{{asset('images/Rach.jpg')}}" width="150" alt="rach" /></div><!--
		--><div class = "item slide-in" id="item3"><img src="{{asset('images/Mel.jpg')}}" width="150" alt="mel" /></div>
		--><div class = "item silde-in" id="item4"><img src="{{asset('images/Vivien.jpg')}}" width="150" alt="viv" /></div>
		--><div class = "item slide-in" id="item5"><img src="{{asset('images/Cedric.jpg')}}" width="150" alt="ced" /></div>
    <div class="controls">
        <a href="#item1" class="btn"></a>
        <a href="#item2" class="btn"></a>
        <a href="#item3" class="btn"></a>
        <a href="#item4" class="btn"></a>
        <a href="#item5" class="btn"></a>
    </div>
</div>
</body >
</html >

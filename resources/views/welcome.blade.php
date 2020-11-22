<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}"/>
        <script src="/js/uikit.min.js"></script>
        <script src="/js/uikit-icons.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="main-content">
            
            <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-usage">Open</button>

            <a href="#offcanvas-usage" uk-toggle>Open</a>
            
            <div id="offcanvas-usage" uk-offcanvas>
                <div class="uk-offcanvas-bar">
            
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                <a href="register">
                    <div class="item-title">アカウント作成</div>
                </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            
                </div>
            </div>
            <div class="uk-section-xsmall uk-section-default uk-box-shadow-small uk-sticky uk-aimation-slide-top uk-animation-enter" uk-sticky="show-on-up: true; animation: uk-aimation-slide-top;" style="animation-duration: 200ms;">
                <div class="uk-container uk-container-expand">
                  <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar="">
                    <div class="uk-navbar-left"><a href="#offcanvas-left" uk-icon="icon: list" uk-toggle="" class="uk-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"> <rect x="6" y="4" width="12" height="1"></rect> <rect x="6" y="9" width="12" height="1"></rect> <rect x="6" y="14" width="12" height="1"></rect> <rect x="2" y="4" width="2" height="1"></rect> <rect x="2" y="9" width="2" height="1"></rect> <rect x="2" y="14" width="2" height="1"></rect></svg></a></div>
                    <div class="uk-navbar-center"><a class="uk-navbar-item" style="font-size: 3rem" href="#">Geartics</a></div>
                    <div class="uk-navbar-right"><a href="#offcanvas-right" uk-icon="icon: grid" uk-toggle="" class="uk-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" ratio="1"> <rect x="2" y="2" width="3" height="3"></rect> <rect x="8" y="2" width="3" height="3"></rect> <rect x="14" y="2" width="3" height="3"></rect> <rect x="2" y="8" width="3" height="3"></rect> <rect x="8" y="8" width="3" height="3"></rect> <rect x="14" y="8" width="3" height="3"></rect> <rect x="2" y="14" width="3" height="3"></rect> <rect x="8" y="14" width="3" height="3"></rect> <rect x="14" y="14" width="3" height="3"></rect></svg></a></div>
                  </nav>
                </div>
              </div>
              <div class="uk-sticky-placeholder" style="height: 60px; margin: 0px;" hidden="hidden"></div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="content-title" style="font-size: 3rem;">
                    あなたのコスメを公開してみましょう
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

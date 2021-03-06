<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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
        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
            <!--入力フォーム-->
    <div class="l-single__wide form">
        <form action="{{ route('login') }}" method="POST" class="form-box">
            @csrf
            
            <h2 class="form-title">ログイン</h2>

            <div class="form-box_item">
                <label class="form-label" for="email">メールアドレス</label>
                @error('email')
                <span class="invalid-feedback c-error__message" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="input @error('email') is-invalid @enderror" required autocomplete="email" autofocus placeholder="例：webdojo@sample.com">
            </div>

            <div class="form-box_item">
                <label class="form-label" for="password">パスワード</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="password" type="password" name="password" class="input @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="半角英数字を8文字以上入力して下さい">
            
                <input id="pass_save" type="checkbox" name="pass_save">
                <label for="pass_save" class="input-pass_save checkbox-label">次回ログインを省略する</label>
            </div>

            <input type="submit" class="c-btns" value="ログインする">
            <a href="{{route('password.request')}}" class="remind r-arrow-icon">パスワードを忘れた場合はこちら</a>

        </form>

</div>
    </body>
</html>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/header.css">
</head>

<body>
  <div class="header">
    <div class="headerContainer">
      <h1 class="headerLogo">
        <a href='/list'>triton</a>
      </h1>
      <ul class="headerBtns">
        <!-- ページごとで以下のボタンを変更 -->
        @if (Auth::check())
        <li><a href="{{ route('add') }}" class="headerBtn headerPostBtn">新規投稿</a></li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> ログアウト </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
        <div class="headerIcon">
          <img src="#" alt="">
        </div>
        @else
        <li><a href="{{ route('register') }}" class="headerBtn headerSignupBtn">会員登録</a></li>
        <li><a href="{{ route('login') }}" class="headerSigninBtn">ログイン</a></li>
        @endif
      </ul>
    </div>
  </div>
</body>

</html>
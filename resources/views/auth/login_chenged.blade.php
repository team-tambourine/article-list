<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/loginAndSignUp.css">
    </head>

    <body>
        @include('header')
        <div class="container">
          <div class="loginContent">
            <div class="text-center">
                  <h1 class="loginTitle">ログイン</h1>
            </div>
          
            <div class="row formContainer">
              <!-- <div class="col-sm-6 offset-sm-3"> -->
              <div class="formWrapper">
                  <form method="POST" >
                    {{ csrf_field() }}
                    <div class="form-group">
                    　<p class="loginLabel">メールアドレス</p>
                      <input class="form-control"  autocomplete="email" type="email" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                      <p class="loginLabel">パスワード</p>
                      <input class="form-control" autocomplete="off" type="password" name="password" required>
                      <p class="passwordDescription description">8文字以上 小文字大文字数字が入っているようにしてください。</p>
                    </div>
                    

                    <div class="actions">
                      <input type="submit" name="commit" value="ログイン" class="btn btn-primary w-100 submitButton">
                    </div>
                    
                  </form>
                    {{-- ユーザ登録ページへのリンク --}}
                  <p class="mt-2 description">もしアカウントを持っていない場合は<span class="loginLink">新規登録</span>をしてください。</p>
                
              </div>
            </div>   
            
            
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
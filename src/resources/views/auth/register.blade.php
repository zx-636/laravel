<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登録ページ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
  <header class="header">
    <form class="header-form" action="/login" method="get">
      @csrf
      <div class="header__inner">
          <h1 class="header__logo">FashionablyLate</h1>
          <input class="header__btn" type="submit" value="login">
      </div>
    </form>
  </header>

  <main>
    <div class="contact">
        <div class="contact__content">
            <div class="contact-form__heading">
              <h2>Register</h2>
            </div>
            <div class="box">
            <form class="form" action="/register" method="post">
              @csrf
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">お名前</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="text" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}"/>
                  </div>
                  <div class="form__error">
                    @error('name')
                      <span class="error">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">メールアドレス</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                  </div>
                  <div class="form__error">
                    @error('email')
                      <span class="error">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="form__group">
                <div class="form__group-title">
                  <span class="form__label--item">パスワード</span>
                </div>
                <div class="form__group-content">
                  <div class="form__input--text">
                    <input type="password" name="password" placeholder="例:coachtech1106"/>
                  </div>
                  <div class="form__error">
                    @error('password')
                      <span class="error">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>
              
              <div class="form-submit">
                <button class="form-submit__btn" type="submit" name="submit">登録</button>
              </div>
            </form>
          </div>
        </div>
    </div>    
  </main>
</body>

</html>
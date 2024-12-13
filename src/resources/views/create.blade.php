<!DOCTYPE html>
<html lang="ja">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム入力ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>

<body>
    <header class="header">
    <div class="header__inner">
        <h1 class="header__logo">FashionablyLate</h1>
        </div>
    </header>

    <main>
        <div class="contact">
            <div class="contact__content">
                <h2 class="contact-form__heading">Contact</h2>
            </div>

            <form class="contact-form" action="/confirm" method="post">
                @csrf
                <div class="inputs">
                    <label class="label">お名前<span>※</span></label>
                    <input class="input_form" type="text" name="name" placeholder="例:山田" />
                    <input class="input_form" type="text" name="name" placeholder="例:太郎" />
                </div>

                <div class="inputs">
                    <label class="label">性別<span>※</span></label>
                    <input type="radio" name="gender" value="男" checked>男性
                    <input type="radio" name="gender" value="女">女性
                    <input type="radio" name="gender" value="その他">その他
                </div>

                <div class="inputs">
                        <label class="label">メールアドレス<span>※</span></label>
                    <input class="input_form" type="email" name="email" placeholder="例:test@example.com" />
                </div>

                <div class="inputs">
                    <label class="label">電話番号<span>※</span></label>
                    <input class="input_form" type="tel" name="tel" placeholder="080" /> -
                    <input class="input_form" type="tel" name="tel" placeholder="1234" /> -
                    <input class="input_form" type="tel" name="tel" placeholder="5678" />
                </div>

                <div class="inputs">
                    <label class="label">住所<span>※</span></label>
                    <input class="input_form" type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷" />
                </div>

                <div class="inputs">
                    <label class="label">建物名</label>
                    <input class="input_form" type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                </div>

                <div class="inputs">
                        <label class="label">お問い合わせ種別<span>※</span></label>
                    <select class="select" name="type">
                        <option value="">選択してください</option>
                        <option value="1">商品のお届けについて</option>
                        <option value="2">商品の交換について</option>
                        <option value="3">商品トラブル</option>
                        <option value="4">ショップへのお問合せ</option>
                        <option value="5">その他</option>
                    </select>
                </div>

                <div class="inputs">
                    <label class="label">お問い合わせ内容<span>※</span></label>
                    <textarea class="textarea" name="message" placeholder="例:お問い合わせ内容をご記載ください" cols="120" rows="10"></textarea>
                </div>

                <div class="form-submit">
                    <button class="form-submit__btn" type="submit" name="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
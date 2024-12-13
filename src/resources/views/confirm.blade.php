<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合せフォーム確認ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
        </div>
    </header>

    <main>
        <div class="confirm">
            <div class="confirm__content">
                <h2 class="confirm-form__heading">Confirm</h2>
            </div>

            <form class="confirm-form" action="/thanks" method="post">
                @csrf
                <table>
                    <tr>
                    <th>お名前</th>
                    <td>山田 太郎</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>男性</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>test@example.com</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>090-1234-5678</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>東京都渋谷区千駄ヶ谷1-2-3</td>
                </tr>
                <tr>
                    <th>建物名</th>
                    <td>千駄ヶ谷マンション101</td>
                </tr>
                <tr>
                    <th>お問い合わせの種類</th>
                    <td>商品の交換について</td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>届いた商品が注文した商品ではありませんでした。<br>
                        商品の取り替えをお願いします。</td>
                    </tr>
                </table>

                <div class="btn-area">
                    <button class="form-submit__btn" type="submit" name="submit">送信</button>
                    <button class="form-submit__btn--reset" type="button" name="reset" onclick="window.location.href='contact.html'">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitaize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body>
    <header class="header">
        <form class="header-admin" action="/logout" method="post">
            @csrf
            <div class="header__inner">
                <h1 class="header__logo">FashionablyLate</h1>
                <input class="header__btn" type="submit" value="logout">
            </div>
        </form>
    </header>

    <main>
        <div class="admin">
            <div class="admin__content">
                <h2 class="admin-form__heading">Admin</h2>
            </div>

            <form class="admin-form" action="/admin.search" method="get">
                <input type="text" name="name" placeholder="名前やメールアドレスを入力してください" value="{{ request('name') }}">
            
                <select name="gender">
                    <option value="">性別</option>
                    <option value="all" {{ request('gender') == 'all' ? 'selected' : '' }}>全て</option>
                    <option value="male" {{ request('gender') == 'male' ? 'selected' : '' }}>男性</option>
                    <option value="female" {{ request('gender') == 'female' ? 'selected' : '' }}>女性</option>
                    <option value="other" {{ request('gender') == 'other' ? 'selected' : '' }}>その他</option>
                </select>
            
                <select name="contact_type">
                    <option value="">お問い合わせの種類</option>
                    <option value="exchange" {{ request('contact_type') == 'exchange' ? 'selected' : '' }}>商品の交換について</option>
                    <option value="trouble" {{ request('contact_type') == 'trouble' ? 'selected' : '' }}>商品トラブル</option>
                    <option value="shop" {{ request('contact_type') == 'shop' ? 'selected' : '' }}>ショップへのお問合せ</option>
                    <option value="other" {{ request('contact_type') == 'other' ? 'selected' : '' }}>その他</option>
                </select>
            
                <input type="date" name="date" value="{{ request('date') }}">
                <input type="submit" name="search" value="検索">
                <input type="reset" name="reset" value="リセット" onclick="window.location='/admin.search'">

                <div class="export">
                    <input type="button" name="export" value="エクスポート">
                    <div class="pagination">
                        {{-- {{ $contacts->links() }} --}}
                    </div>
                </div>

                <table class="contact-list">
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                    @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->gender }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->contact_type }}</td>
                        <td><button type="button" class="detail-btn" onclick="showDetails({{ $contact->id }})">詳細</button></td>
                    </tr>
                    @endforeach
                </table>
                <script>
                    function showDetails(id) {
                        // Implement the logic to show details, possibly using a modal
                        alert('Show details for contact ID: ' + id);
                    }
                    </script>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <button class="delete-btn" type="button">削除</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
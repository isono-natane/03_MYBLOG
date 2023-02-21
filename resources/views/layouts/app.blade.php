<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<header>
    <a href="/" class="stite-title">ミニブログ</a>
    <nav class="tab">
        <ul>
            @if(Auth::check())
            <li><a class="tab-item{{ Request::is('home') ? ' active': ''}}" href="{{ route('home')}}">マイページ</a></li>
            <li><a class="tab-item{{ Request::is('articles') ? ' active': ''}}" href="{{ route('articles.index')}}">記事検索</a></li>
            <li><a class="tab-item{{ Request::is('bookmarks') ? ' active' : ''}}" href="{{ route('bookmarks') }}">ブックマーク</a></li>

                <form on-submit="return confirm('ログアウトしますか')" action="{{ route('logout')}}" method="post">
                    @csrf
                    <button type="submit">ログアウト</button>
                </form>
                @else
                <li><a href="{{route('login')}}">ログイン</a></li>
                <li><a href="{{route('register')}}">会員登録</a></li>
                @endif
            </li>
        </ul>

    </nav>
</header>
<main class="container">
@yield('content')

</main>
<footer>
    &copy; Laravel8 入門～開発実践まで
</footer>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="whole-page">
            <div class="navigation">
                <nav>
                    <div class="title">
                         <h3>save_likes</h3>
                    </div>
                    <li><a href="{{ route('post.timeline') }}" class="list-a"><i class="fa-solid fa-house"></i>タイムライン</a></li>
                    <li><a href="{{ route('user.search') }}" class="list-a"><i class="fa-solid fa-magnifying-glass"></i>検索ページ</a></li>
                    <li><a href="{{ route('message.select') }}" class="list-a"><i class="fa-solid fa-envelope"></i>メッセージ</a></li>
                    <li><a href="{{ route('post.create') }}" class="list-a"><i class="fa-solid fa-square-plus"></i>新規投稿</a></li>
                    <li><a href="{{ route('show',['id' => Auth::id()]) }}" class="list-a"><i class="fa-solid fa-user"></i>プロフィール</a></li>
                    <li><a href="{{ route('post.likes') }}" class="list-a"><i class="fa-solid fa-heart"></i></i>いいね数（変換）</a></li>
                    {{-- <li><a href="{{ route('post.list') }}" class="list-a"><i class="fa-solid fa-bookmark"></i>投稿保存</a></li> --}}
                </nav>
            </div>
        </div>
    </main>
    
</body>
</html>
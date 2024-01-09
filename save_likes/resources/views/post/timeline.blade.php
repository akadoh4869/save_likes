<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Likes</title>
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">

</head>
<body>
    {{-- <header>
        <div class="header-left">
            @auth
                <img src="{{ asset('/storage/images/'. Auth::user()->avatar) }}" alt="" class="profile-picture">
            @endauth
        </div>
       
        <div class="header-right">
        </div>
    </header> --}}
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
            <div class="content">
                @foreach($posts as $post)
                <div class="post-box">
                    <a href="{{ route('show',[$post->user->id]) }}">
                        <img src="{{ asset('storage/images/'.$post->user->avatar) }}" alt="">
                        <a href="{{ route('post.detail',['id' => $post->id]) }}">
                            <div class="post-content">
                                <div class="username">{{ $post->user->name }}</div>
                                <div class="content-text">{{ $post->post }}</div>
                            </div>
                        </a>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="user-display">
                <div class="my-prifile">
                    <a href="{{ route('show',[$post->user->id]) }}"><img src="{{ asset('storage/images/'.$post->user->avatar) }}" alt="">
                        <div class="username">{{ $post->user->name }}</div>
                    </a>   
                </div>
                <div class="favolite-user">
                    <h5>おすすめ</h5>

                </div>

            </div>
        </div>
        
    </main>
    <footer>
        {{-- <div class="footer-left">
            <div class="home-btn">
                <a href="/timeline"><i class="fa-solid fa-house fa-lg"></i></a>
            </div>
        </div>
        <div class="footer-center">
            <div class="likes-btn">
                <a href="/wallet"><i class="fa-solid fa-heart fa-lg"></i></a>
            </div>

        </div>
        <div class="footer-right">
            <div class="myprofile-btn">
                <a href="{{ route('show',[$post->user->id]) }}"><i class="fa-solid fa-user fa-lg"></i></a>
            </div>
        </div> --}}
        <a href="{{ route('post.create') }}" class="new-post-button">＋</a>

    </footer>
</body>
</html>
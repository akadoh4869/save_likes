<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Likes</title>
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">

</head>
<body>
    <header>
        <div class="header-left">
            <img src="{{ asset('image/cat2.jpg') }}" alt="" class="profile-picture">
        </div>
        <div class="header-center">
            <div class="title">
                <h2>Likes</h2>
            </div>
        </div>
        <div class="header-right">
        </div>
    </header>
    <main>
        <div class="content">
            @foreach($posts as $post)
            <div class="post-box">
                <a href="{{ route('show',[$post->user->id]) }}"><img src="{{ asset('storage/images/'.$tweet->user->avatar) }}" alt=""></a>
                <div>{{ $tweet->tweet }}</div>
            </div>
            @endforeach

        </div>
    </main>
    <footer>
        <div class="footer-left">
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
                <a href="/profile"><i class="fa-solid fa-user fa-lg"></i></a>
            </div>
        </div>
        <a href="{{ route('post.create') }}" class="new-post-button">＋</a>

    </footer>
</body>
</html>
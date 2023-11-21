<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Likes</title>
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">

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
                <a href="{{ route('show',[$post->user->id]) }}"><img src="{{ asset('storage/images/'.$post->user->avator) }}" alt=""></a>
                <div>{{ $post->post }}</div>
            </div>

        </div>
    </main>
    <footer></footer>
</body>
</html>
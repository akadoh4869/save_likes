<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.2/css/all.css">
</head>
<body>
    <header>
        <div class="header-left">
            <a href="{{ route('post.timeline') }}" class ="cancel-btn">キャンセル</a>

        </div>
        <div class="header-center">


        </div>
        <div class="header-right">
            <a href="{{ route('post.timeline') }}" class="create-btn">新規投稿する</a>

        </div>
    </header>
    <main>
        <div class="main-content">
            <div class="image-content">
                <img src="{{ asset('image/cat2.jpg') }}" alt="" class="profile-picture">

            </div>
            <input type="text" class="text-input" placeholder="今何してる？">

        </div>
        
    </main>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style-index.css') }}">
</head>
<body>
@if($posts->isEmpty())
    <span>Нет постов</span>
@else
    @foreach($posts as $post)
        <div class="container">
            <h4> {{ $post->name }}}</h4>
            <img src="{{ $post->poster }}" alt="">
            <p> {{ $post->desription }}}</p>
            <p> {{ $post->content }}}</p>
            @foreach($post->categories as $category)
                <span>{{ $category->name }}}</span>
            @endforeach
        </div>
    @endforeach
@endif
</body>
</html>


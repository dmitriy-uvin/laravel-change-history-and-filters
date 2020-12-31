<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="font-sans">
    <div>
        @foreach($posts as $post)
            <p>
                <ul>
                    <li>Title: {{ $post->title }}</li>
                    <li>Body: {{ $post->body }}</li>
                    <li>CreatedAt: {{ $post->created_at }}</li>
                    <li></li>
{{--                    <li>Author: {{ $post->author->name }}</li>--}}
                </ul>
            </p>
            <hr>
        @endforeach
    </div>
</body>
</html>

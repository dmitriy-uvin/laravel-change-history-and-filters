<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="font-sans">
<div>
    <p>
        <ul>
            <li>Title: {{ $post->title }}</li>
            <li>Body: {{ $post->body }}</li>
            <li>CreatedAt: {{ $post->created_at }}</li>
        </ul>
    </p>
    @if(count($post->adjustments))
    <p>
        <h3>Last updates</h3>
        <ul>
            @foreach($post->adjustments as $user)

                <li>[{{ $user->pivot->id }}]
                    {{ $user->name }} on {{ $user->pivot->updated_at->diffForHumans() }}
                </li>
            @endforeach
        </ul>
    </p>
    @endif
</div>
</body>
</html>

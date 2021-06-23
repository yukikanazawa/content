<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コンテンツ要約サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>コンテンツ要約サイト</h1>
        <div class='initials'>
            @foreach ($initials as $initial)
                <a href="/initials/{{ $initial->id }}">{{ $initial->initial }}</a>
            @endforeach
        </div>
    </body>
</html>
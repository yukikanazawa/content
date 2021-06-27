<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コンテンツ要約サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{ $initial->initial }}行</h1>
        <div class='titles'>
            @foreach ($overviews as $overview)
                <h2>{{ $overview->title }}</h2>
                <a href="/initials/{{ $initial->id }}/{{ $overview->id }}/short">短文要約</a>
                <a href="/initials/{{ $initial->id }}/{{ $overview->id }}/long">長文要約</a><br>
            @endforeach     </div>
        <div class='back'>[<a href='/'>戻る</a>]</div>
    </body>
</html>
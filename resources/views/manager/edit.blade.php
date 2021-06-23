<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コンテンツの編集</title>
    </head>
    <body>
        <h1>{{ $overview->title }}のコンテンツの編集</h1>
        <form action="/initials/{{ $initial->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="overview[title]" value='{{ $overview->title }}'/>
            </div>
            <div class="body">
                <h2>短文</h2>
                <input type="text" name="overview[short_body]" value='{{ $overview->short_body }}'/>
            </div>
                <h2>長文</h2>
                <input type="text" name="overview[long_body]" value='{{ $overview->long_body }}'/>
            </div><br>
            <input type="hidden" name="overview_id" value='{{ $overview->id }}'/>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/initials/{{ $initial->id }}">戻る</a>]</div>
    </body>
</html>
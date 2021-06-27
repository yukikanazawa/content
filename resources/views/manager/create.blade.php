<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ $initial->initial }}行のコンテンツの要約[管理者用]</title>
    </head>
    <body>
        <h1>{{ $initial->initial }}行のコンテンツの要約</h1>
        <form action="/manager/initials/{{ $initial->id }}" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="overview[title]" placeholder="タイトルを記載"/>
            </div>
            <div class="body">
                <h2>短文</h2>
                <textarea name="overview[short_body]" placeholder="短文の要約内容を記載"></textarea>
            </div>
                <h2>長文</h2>
                <textarea name="overview[long_body]" placeholder="長文の要約内容を記載"></textarea>
            </div><br>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/manager/initials/{{ $initial->id }}">戻る</a>]</div>
    </body>
</html>
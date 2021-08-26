@extends('layouts.app')

<link rel="stylesheet" href='{{ asset('css/style.css') }}' />
@section('content')
<div class='body'> 
    <h1>{{ $initial->initial }}行のコンテンツの要約の新規作成</h1>
        <form action="/manager/initials/{{ $initial->id }}/store" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="overview[title]" placeholder="タイトルを記載" size="48">
            </div>
            <div class="short\body">
                <h2>短文</h2>
                <textarea name="overview[short_body]" placeholder="短文の要約内容を記載" rows="5" cols="75"></textarea>
            </div>
            <div class="long\body">
                <h2>長文</h2>
                <textarea name="overview[long_body]" placeholder="長文の要約内容を記載" rows="10" cols="75"></textarea>
            </div><br>
            <input type="submit" value="保存"/>
        </form>
    <div class="back">[<a href="/manager/initials/{{ $initial->id }}">戻る</a>]</div>
</div>
@endsection
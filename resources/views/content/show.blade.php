@extends('layouts.app')

@section('content')
        <h1>{{ $overview->title }}</h1>
            <div class="content">
                <a href="/initials/{{ $initial->id }}/{{ $overview->id }}/short">短文要約</a>
                <a href="/initials/{{ $initial->id }}/{{ $overview->id }}/long">長文要約</a>
                <a href='/initials/{{ $initial->id }}'>戻る</a></br>
            </div>
            <div class="comment">
                <h2>コメント欄</h2></br></br>
                @foreach ($comments as $comment)
                    <p>{{ $comment->name }}</p>
                    <p>{{ $comment->body }}</p></br></br>
                @endforeach
                </br><h2>新規のコメントを作成</h2></br></br>
                <form action="/manager/initials/{{ $initial->id }}" method="POST">
                    {{ csrf_field() }}
                    <div class="title">
                        <p>ユーザーネーム</p>
                        <input type="text" name="comment[name]" value="{{ optional(Auth::user())->name }}" 
                        placeholder="ログインしないとコメント出来ません" readonly/>
                    </div>
                    <div class="body">
                        <p>この作品の感想</p>
                        <textarea name="comment[body]" placeholder="感想を記載"></textarea>
                    </div>
                    <input type="submit" value="保存"/>
                </form>
                
            </div>
@endsection
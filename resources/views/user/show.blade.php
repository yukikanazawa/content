@extends('layouts.app')

<link rel="stylesheet" href='{{ asset('css/style.css') }}' />
@section('content')
    <div class='body'> 
        <h1>{{ $overview->title }}</h1>
        <div class="content">
            <h3><a href="/initials/{{ $initial->id }}/{{ $overview->id }}/short">短文要約</a></h3>
            <h3><a href="/initials/{{ $initial->id }}/{{ $overview->id }}/long">長文要約</a></h3>
            <a href='/initials/{{ $initial->id }}' class='back'>[戻る]</a></br></br>
        </div>
        <div class="comment">
            <h2>新規のコメントを作成</h2>
            @if( !empty(Auth::user()->name) ) 
            <form action="/initials/{{ $initial->id }}/{{ $overview->id }}/store" method="POST">
                {{ csrf_field() }}
                <div class="usercomment">
                    ユーザーネーム</br>
                    <input type="text" name="comment[name]" value="{{ Auth::user()->name }}" size="48" readonly /> </br> 
                    この作品の感想</br>
                    <textarea name="comment[body]" placeholder="感想を記載" rows="5" cols="65"></textarea>
                    <input type="submit" value="保存"/>
                </div>
            </form>
            @else
            </br><h3>※コメントをするには右上からログインしてください。</h3></br></br></br>
            @endif
            
            <h2>コメント欄</h2>
           @foreach ($comments as $comment)
                <div class="flex">
                <p>・{{ $comment->name }}　</p>
                <form method="POST" action="/initials/{{ $initial->id }}/delete" id="form_delete">
                    @csrf
                    @method('DELETE')
                    @if( $comment->name == optional(Auth::user())->name )
                        <input type="hidden" name="comment_id" value='{{ $comment->id }}'/>
                        <input type="submit" style="display:none">
                        <button onclick="return deletePost();">削除</button>
                    @endif
                </form>
                </div>
                <p>{{ $comment->body }}</p></br>
            @endforeach</br></br>
        </div>
    </div>
    <script>
        function deletePost(){
            'use strict';
            if (confirm('本当にコメントを削除しますか？')){
                document.getElementById('form_delete').submit();
            } else{
                return false;    
            }
        }
    </script>
@endsection
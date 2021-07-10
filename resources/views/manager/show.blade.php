@extends('layouts.app')

<link rel="stylesheet" href='{{ asset('css/style.css') }}' />
@section('content')
    <div class='body'> 
        <h1>{{ $overview->title }}[管理者用]</h1>
            <div class="flex">
                <div class="delete">    
                    <form method="POST" action="/manager/initials/{{ $initial->id }}" id="form_delete">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="overview_id" value='{{ $overview->id }}'/>
                        <input type="submit" style="display:none">
                            <h3><a href="/manager/initials/{{ $initial->id }}/{{ $overview->id }}/short">短文要約</a></h3>
                            <h3><a href="/manager/initials/{{ $initial->id }}/{{ $overview->id }}/long">長文要約</a></h3>
                            <h3><a href="/manager/initials/{{ $initial->id }}/{{ $overview->id }}/edit">要約の編集</a></h3>
                            <h3><a class='delete'><span onclick="return deletePost();">要約の消去</span></a></h3>
                            <a href='/manager/initials/{{ $initial->id }}/' class='back'>[戻る]</a>
                    </form></br>
                </div>
            </div>
            <div class="comment">
                <h2>新規のコメントを作成</h2>
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
                <h2>コメント欄</h2></br></br>
                @foreach ($comments as $comment)
                <div class="flex">
                <p>・{{ $comment->name }}　</p>
                <form method="POST" action="/initials/{{ $initial->id }}/delete" id="form_destroy">
                    @csrf
                    @method('DELETE')
                        <input type="hidden" name="comment_id" value='{{ $comment->id }}'/>
                        <input type="submit" style="display:none">
                        <button onclick="return deleteComment();">削除</button>
                </form>
                </div>
                <p>{{ $comment->body }}</p></br>
            @endforeach</br></br>
            </div>
    </div>
        
    <script>
        function deletePost(){
            'use strict';
            if (confirm('この作品の情報を全て削除しますか？')){
                document.getElementById('form_delete').submit();
            } else{
                return false;    
            }
        }
        
        function deleteComment(){
            'use strict';
            if (confirm('本当にコメントを削除しますか？')){
                document.getElementById('form_destroy').submit();
            } else{
                return false;    
            }
        }
    </script>
@endsection
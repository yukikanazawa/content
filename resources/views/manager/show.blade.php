<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>コンテンツ要約サイト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{ $initial }}行</h1>
        <div class='create'><a href='/initials/{{ $id_initial }}/create'><<新規作成>></a></div>
        <div class='titles'>
            @foreach ($overviews as $overview)
                <h2>{{ $overview->title }}</h2>
                <a href="/initials/{{ $id_initial }}/{{ $overview->id }}/short">短文要約</a>
                <a href="/initials/{{ $id_initial }}/{{ $overview->id }}/long">長文要約</a><br>
                <a href="/initials/{{ $id_initial }}/{{ $overview->id }}/edit">要約の編集</a><br>
                
                <form method="POST" action="/initials/{{ $id_initial }}" id="form_delete">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="overview_id" value='{{ $overview->id }}'/>
                    <input type="submit" style="display:none">
                    <button class='delete'>[<span onclick="return deletePost();">delete</span>]</button>
                </form>
            @endforeach     </div>
        <div class='back'>[<a href='/'>戻る</a>]</div>
        
        <script>
        function deletePost(){
            'use strict';
            if (confirm('本当に削除しますか？')){
                document.getElementById('form_delete').submit();
            } else{
                return false;    
            }
        }
        
        </script>
    </body>
</html>
@extends('layouts.app')

@section('content')
    <h1>{{ $overview->title }}</h1>
        <div class='long_content'>
            <div class="content__post">
                <h3>長文要約</h3>
                <p>
                    <?php
                    if (empty($long)){
                        echo '（´・人・｀）このコンテンツの長文要約はまだ空です。（´・人・｀）';
                    } else{
                        echo $long;
                    }
                    ?>
                </p>    
            </div>
        </div>
        <div class='back'>[<a href='/initials/{{ $initial->id }}/{{ $overview->id }}'>戻る</a>]</div>
@endsection
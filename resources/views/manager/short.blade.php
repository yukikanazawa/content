@extends('layouts.app')

@section('content')
    <h1>{{ $title }}[管理者用]</h1>
        <div class='short_content'>
            <div class="content__post">
                <h3>短文要約</h3>
                <p>
                    <?php
                    if (empty($short)){
                        echo '（´・人・｀）このコンテンツの短文要約はまだ空です。（´・人・｀）';
                    } else{
                        echo $short;
                    }
                    ?>
                </p> 
            </div>
        </div>
        <div class='back'>[<a href='/manager/initials/{{ $initial->id }}'>戻る</a>]</div>
@endsection
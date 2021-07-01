@extends('layouts.app')

@section('content')
    <h1>{{ $overview->title }}</h1>
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
        <div class='back'>[<a href='/initials/{{ $initial->id }}/{{ $overview->id }}'>戻る</a>]</div>
@endsection
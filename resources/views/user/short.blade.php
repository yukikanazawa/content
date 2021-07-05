@extends('layouts.app')

<link rel="stylesheet" href='{{ asset('css/style.css') }}' />
@section('content')
<div class='body'> 
    <h1>{{ $overview->title }}</h1>
    <div class="content__post">
        <h3>短文要約</h3>
            <p>
                <?php
                if (empty($short)){
                    echo '（´・人・｀）このコンテンツの短文要約はまだ空です。（´・人・｀）';
                } else{
                    echo $short;
                }?>
            </p> 
    </div>
    <div class='back'>[<a href='/initials/{{ $initial->id }}/{{ $overview->id }}'>戻る</a>]</div>
</div>
@endsection
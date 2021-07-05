@extends('layouts.app')

<link rel="stylesheet" href='{{ asset('css/style.css') }}' />
@section('content')
<div class='body'> 
    <h1>{{ $initial->initial }}行[管理者用]</h1>
        <div class='create'><h4><a href='/manager/initials/{{ $initial->id }}/create'><<新規作成>></a></h4></div></br>
        <div class='title'>
            @foreach ($overviews as $overview)
                <h4><a href="/manager/initials/{{ $initial->id }}/{{ $overview->id }}">・{{ $overview->title }}</a></h4>
            @endforeach
        </div>
        <div class='back'>[<a href='/manager/'>戻る</a>]</div>
</div>
@endsection
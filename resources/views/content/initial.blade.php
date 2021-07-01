@extends('layouts.app')

@section('content')
    <h1>{{ $initial->initial }}行</h1>
        <div class='titles'>
            @foreach ($overviews as $overview)
                <a href="/initials/{{ $initial->id }}/{{ $overview->id }}">{{ $overview->title }}</a></br>
            @endforeach
        </div>
        <div class='back'>[<a href='/'>戻る</a>]</div>
@endsection
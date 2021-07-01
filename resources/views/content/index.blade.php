@extends('layouts.app')

@section('content')
    <h1>コンテンツ要約サイト</h1>
        <div class='initials'>
            @foreach ($initials as $initial)
                <a href="/initials/{{ $initial->id }}">{{ $initial->initial }}</a>
            @endforeach
        </div>
@endsection
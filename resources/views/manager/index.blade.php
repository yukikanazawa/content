@extends('layouts.app')

@section('content')
     <h1>コンテンツ要約サイト[管理者用]</h1>
        <div class='initials'>
            @foreach ($initials as $initial)
                <a href="/manager/initials/{{ $initial->id }}">{{ $initial->initial }}</a>
            @endforeach
        </div>
@endsection
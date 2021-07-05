@extends('layouts.app')

<link rel="stylesheet" href='{{ asset('css/style.css') }}' />
@section('content')
<div class='body'> 
    <h1>コンテンツ要約サイト</h1>
        <div class='initials'>
            @foreach ($initials as $initial)
                <h4><a href="/initials/{{ $initial->id }}">・{{ $initial->initial }}行</a></h4>
            @endforeach
        </div>
</div>
@endsection
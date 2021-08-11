@extends('layouts.app')

<link rel="stylesheet" href='{{ asset('css/style.css') }}' />
@section('content')
<div class='body'> 
    <h1>{{ $initial->initial }}行</h1>
    <div class='title'>
        @foreach ($overviews as $overview)
            <h4><a href="/initials/{{ $initial->id }}/{{ $overview->id }}">・{{ $overview->title }}</a></h4>
        @endforeach
    </div>
    {{ $overviews->links() }}
    <div class='back'>[<a href='/'>戻る</a>]</div>
</div>  
@endsection
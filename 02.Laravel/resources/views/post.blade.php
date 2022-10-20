
@extends('layout')

@section('content')
    <article>
        <h1>{!! $post->title !!}</h1>
        {!!$post->body!!}
    </article>
    <a href="/">Back</a>
@endsection

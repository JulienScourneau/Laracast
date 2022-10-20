@extends('layout')

@section('content')
<h1>Hello World</h1>
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{$post->slug}}">
                <h1> {{$post->title }}</h1>
            </a>


            <div>
                {{$post->excerpt}}
            </div>
        </article>
    @endforeach

@endsection





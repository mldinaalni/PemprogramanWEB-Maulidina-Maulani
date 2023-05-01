
@extends('layouts.main')
@section('title', 'POST')

@section('container')
    <h1 class="mb-4">POST</h1>
   @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/post"{{$post['slug']}}">
    <h2>{{ $post["title"] }} </h2>
</a>
    <p> {{ $post["body"] }}</p>
</article>
@endforeach
@endsection


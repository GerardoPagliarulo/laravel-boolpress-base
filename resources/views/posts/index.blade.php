@extends('layouts.main')
@section('main-content')
    <section>
        <h1>Posts Archive</h1>
        @foreach ($posts as $post)
            <article>
                <h4>{{$post->user->name}}</h4>
                <h4>Date of create: {{$post->created_at}} - Last edit: {{$post->updated_at}}</h4>
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
            </article>
            @if (!$loop->last)
                <hr>
            @endif
        @endforeach
        {{$posts->links()}}
    </section>
@endsection
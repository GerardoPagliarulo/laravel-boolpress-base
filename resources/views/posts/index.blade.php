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
            <h3>Comments:</h3>
            <ul>
                @foreach ($post->comments as $comment)
                    <li>
                        <h4>{{$comment->name}}</h4>
                        <p>{{$comment->body}}</p>
                        <p>Date of create: {{$comment->created_at}} - Last edit: {{$comment->updated_at}}</p>
                    </li>
                @endforeach
            </ul>
            @if (!$loop->last)
                <hr>
            @endif
        @endforeach
        {{$posts->links()}}
    </section>
@endsection
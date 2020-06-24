@extends('layouts.main')
@section('main-content')
    <section>
        @if (session('post-deleted'))
            <div class="alert alert-success">
                Post "{{session('post-deleted')}}" deleted
            </div>
        @endif
        <h1 class="mb-4">Posts Archive</h1>
        @foreach ($posts as $post)
            <article>
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <h4>{{$post->user->name}}</h4>
                <h4>Date of create: {{$post->created_at}} - Last edit: {{$post->updated_at}}</h4>
                <a href="{{route('posts.show', $post->slug)}}">Read more</a>
            </article>
            @if (!$loop->last)
                <hr>
            @endif
        @endforeach
        <div class="wrap mt-5 d-flex justify-content-end">
            {{$posts->links()}}
        </div>
    </section>
@endsection
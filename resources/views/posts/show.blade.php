@extends('layouts.main')
@section('main-content')
    <section class="posts">
        <h1 class="mb-4">{{$post->title}}</h1>
        <p>{{$post->body}}</p>
        <h6>{{$post->user->name}}</h6>
        <p>Date of create: {{$post->created_at}} - Last edit: {{$post->updated_at}}</p>
        <a class="btn btn-sm btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a>
        <form class="d-inline" action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
        </form>
    </section>
    <section class="commnets mt-4">
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
    </section>
    <section class="tags mt-5">
        <h4>Tags</h4>
        @forelse ($post->tags as $tag)
            <span class="badge badge-pill badge-primary">{{$tag->name}}</span>
        @empty
            <p>No Tags!</p>
        @endforelse
    </section>
@endsection
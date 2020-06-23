@extends('layouts.main')
@section('main-content')
    <section>
        <h1>Blog</h1>
        @foreach ($users as $user)
            <div>
                <h3>{{$user->name}}</h3>
                <img src="{{$user->info['avatar']}}" alt="{{$user->name}}">
                <p>Email: {{$user->email}}</p>
                <p>Address: {{$user->info['address']}}</p>
                <p>Phone number: {{$user->info['phone']}}</p>
                <h3>Posts</h3>
                <ul>
                    @foreach ($user->posts as $post)
                        <li>
                            <h4>{{$post->title}}</h4>
                            <p>{{$post->body}}</p>
                        </li>
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
                    @endforeach
                </ul>
            </div>
            @if (!$loop->last)
                <hr>
            @endif
        @endforeach
    </section>
@endsection
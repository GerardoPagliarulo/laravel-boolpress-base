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
                        <li class="mt-4">
                            <h4>{{$post->title}}</h4>
                            <p>{{$post->body}}</p>
                        </li>
                        <a class="mb-5" href="{{route('posts.show', $post->slug)}}">Read more</a>
                    @endforeach
                </ul>
            </div>
            @if (!$loop->last)
                <hr>
            @endif
        @endforeach
    </section>
@endsection
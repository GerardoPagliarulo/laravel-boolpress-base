<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-boolpress-base</title>
</head>
<body>

    {{-- MAIN HEADER --}}
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <h1>LaraBlog</h1>
            </div>
            <ul class="navbar-menu">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('users.index')}}">Users</a>
                </li>
                <li>
                    <a href="{{route('posts.index')}}">Posts Archive</a>
                </li>
            </ul>
        </nav>
    </header>
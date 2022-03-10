<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>main</title>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="/" class="p-3">home</a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}" class="p-3">dahsboard</a>
            </li>
            <li>
                <a href="{{ route('posts') }}" class="p-3">post</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
                <li>
                    <p class="p-1 mr-3 font-bold">welcome {{auth()->user()->name}}</p>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button  type="submit">LogOut</button>
                    </form>
                </li>
            @endauth

            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Register</a>
            </li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>
</html>
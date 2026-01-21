<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div>
    <div>
        <nav>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('main.index')}}">Main <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('post.index')}}">Posts</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="{{route('about.index')}}">About</a>
                        </li><li class="nav-item">
                            <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>

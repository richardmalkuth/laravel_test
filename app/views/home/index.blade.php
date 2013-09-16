<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- {{ HTML::script('js/jquery-2.0.2') }} -->
    <!-- {{ HTML::script('js/booostrap.js') }} -->
    <!-- {{ HTML::style('css/bootstrap.css') }} -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style>
        table form { margin-bottom: 0; }
        form ul { margin-left: 0; list-style: none; }
        .error { color:red; font-style: italic; }
        body { padding-top: 20px ;}
    </style>
</head>
<body>
    <div class="row-fluid">
        <div class="span12 well">
            <h1>Login</h1>
        </div>
    </div>
<div class="row-fluid">
    <div class="span3">
        <ul class="nav nav-list well">
            @if(Auth::user())
                <li class="nav-header">{{ ucwords(Auth::user()->username) }}</li>
                <li>{{ HTML::link('posts', 'Add Post') }}</li>
                <li>{{ HTML::link('users', 'View Users') }}</li>
                <li>{{ HTML::link('logout', 'Logout') }}</li>
            @else
                <li>{{ HTML::link('login', 'Login') }}</li>
            @endif
        </ul>
    </div>
    <div class="span9">
        @yield('content')
    </div>
</div>

    <script src="{{ asset('js/jquery-2.0.2.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
</body>
</html>
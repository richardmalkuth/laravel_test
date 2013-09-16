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
		body { padding-top: 60px ;}

	</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
		<div class="container">
		
			<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="">Test</a>

			<div class="nav-collapse collapse">
				<ul class="nav">
					@if(Auth::user())
			            <li>{{ HTML::link('posts', 'Post') }}</li>
			            <!-- <li>{{ HTML::link('users', 'View Users') }}</li> -->
			        @else
			            <!-- <li>{{ HTML::link('login', 'Login') }}</li> -->
			        @endif
				</ul>
			</div>

			<div class="nav pull-right">
					<ul class="nav">
						@if ( Auth::user() )
							<li>{{ HTML::link('', 'Welcome, '.Auth::user()->username.'')}}</li>
							<li>{{ HTML::link('logout', 'Logout') }}</li>
						@else
							
						@endif
					</ul>
				</div>
		</div>
	</div>
</div>

<!-- Container -->
<div class="container">

	<!-- Success-Messages -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Success</h4>
            {{{ $message }}}
        </div>
    @endif

    <!-- check for flash notification message -->
    <!-- @if(Session::has('flash_notice'))
        <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
    @endif -->
	@if (Session::has('message'))
		<div class="flash alert">
			<p>{{ Session:: get('message') }}</p>
		</div>
	@endif

	<!-- Content -->
	@yield('content')

</div>

<script src="{{ asset('js/jquery-2.0.2.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
	
</body>
</html>
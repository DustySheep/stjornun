<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    @include('includes.auth_menu')
</nav>

<div id="main" class="row">
    <div id="sidebar" class="col s12 m4 l3">
        @include('includes.sidebar')
    </div>
    <div id="content" class="col s12 m8 l9">
        @yield('content')
    </div>
</div>

<footer class="row">
    @include('includes.footer')
</footer>
</body>
</html>

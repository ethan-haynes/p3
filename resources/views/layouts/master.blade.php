<!DOCTYPE html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'P3' --}}
        @yield('title','P3')
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset='utf-8'>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/jquery-ui.css"> -->

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    <header>
        <div class="row">
            <nav class="col-xs-12 col-md-12 navbar navbar-default navbar-static-top">
                <div class="container">
                    <ul class="nav nav-pills">
                        <li role="presentation"><a href="http://p1.ehay.me">Project 1</a></li>
                        <li role="presentation"><a href="http://p2.ehay.me">Project 2</a></li>
                        <li role="presentation"><a href="http://p3.ehay.me">Project 3</a></li>
                        <li role="presentation"><a href="http://p4.ehay.me">Project 4</a></li>
                    </ul>
                </div>
            </nav>
            <br>
            <br>
            <br>
        </div>
    </header>
    <div>
        <a href="p3-dwa15/p3/public/">home</a>
        <a href="/p3-dwa15/p3/public/lorem">lorem</a>
        <a href="/p3-dwa15/p3/public/user">user</a>
    </div>
    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>

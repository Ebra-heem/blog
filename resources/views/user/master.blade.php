<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Ebrahim | blog</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('public/user/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/user/css/prism.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="{{asset('public/user/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Custom styles for this template -->
        <link href="{{asset('public/user/css/clean-blog.min.css')}}" rel="stylesheet">

    </head>

    <body>
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=405358266553959&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        @include('user.includes.header')

        @section('post-header')
            @show
        <!-- Page Header -->

        @yield('post-content')


        <!-- Footer -->
        @include('user.includes.footer')
        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('public/user/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('public/user/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/user/js/prism.js')}}"></script>
        <!-- Custom scripts for this template -->
        <script src="{{asset('public/user/js/clean-blog.min.js')}}"></script>

    </body>

</html>


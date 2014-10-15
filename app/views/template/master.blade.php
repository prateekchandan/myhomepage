<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <meta http-equiv="content-style-type" content="text/css" />
    <meta http-equiv="content-language" content="nl" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Prateek Chandan" />
    <meta name="description" content="I am Prateek Chandan a ninja webdeveloper / creative programmer with good knowledge of front-end technics." />
    <meta name="keywords" content=", PHP programmer, Web developer, Startup, Interactive CV, Resume, CV, Whoopaa, HRMatches, Sanitairwinkel, Algorithms, PHP, MySQL, OOP" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="14 days" />
    <title>
        Prateek Chandan - Homepage
    </title>
    <!-- Bootstrap core CSS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('view/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('view/style.css')}}" rel="stylesheet" />
    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('include/font-awesome/css/font-awesome.min.css')}}">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-47791016-2', 'auto');
      ga('send', 'pageview');

    </script>

    <!--[if lt IE 9]>
            <script src="/view/js/html5shiv.js">
            </script>
            <script src="/view/js/respond.min.js">
            </script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target="#navbar-example">
    
    @yield('page')
        <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
    </script>
    <script type="text/javascript" src="{{URL::asset('view/js/script.js')}}">
    </script>
    <script type="text/javascript" src="{{URL::asset('view/js/bootstrap.min.js')}}">
    </script>
    
</body>

</html>
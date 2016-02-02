<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Planes a la carta</title>

        <!-- Mobile Specific Metas
      ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


        <!-- CSS
      ================================================== -->
        <!-- Bootstrap -->
        {!!Html::style('assets/css/bootstrap.min.css')!!}
        <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- FontAwesome -->
        {!!Html::style('css/font-awesome.min.css')!!}
        <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
        {!!Html::style('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')!!}
        <!-- Theme style -->
        <!--<link rel="stylesheet" href="AdminLTE.min.css">-->

        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <!--<link rel="stylesheet" href="skins/skin-blue.min.css">-->
        {!!Html::style('css/skins/skin-blue.min.css')!!}
        <!-- Animation -->
        {!!Html::style('css/animate.css')!!}
        <!--<link rel="stylesheet" href="css/animate.css">-->
        <!-- Bxslider CSS -->
        {!!Html::style('css/bxslider.css')!!}
        <!--<link rel="stylesheet" href="css/bxslider.css">-->
        <!-- Template styles-->
        {!!Html::style('css/style.css')!!}
        <!--<link rel="stylesheet" href="css/style.css">-->
        <!-- Responsive styles-->
        {!!Html::style('css/responsive.css')!!}
        <!--<link rel="stylesheet" href="css/responsive.css">-->
        <!-- Estilos del timeline de resultados-->
        {!!Html::style('css/AdminLTE.min.css')!!}
        {!!Html::style('css/timeline.css')!!}
        <!--<link rel="stylesheet" href="css/timeline.css">-->





        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- USER ACCOUNT MENU -->
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/suscribe') }}">Register</a></li>
                        @else
                        <!--                                <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                                {{ Auth::user()->name }} <span class="caret"></span>
                                                            </a>
                        
                                                            <ul class="dropdown-menu" role="menu">
                                                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                                            </ul>
                                                        </li>-->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="imgages/user_icon.png" class="img-circle" alt="User Image">
                                    <p>
                                        {{ Auth::user()->name }}
                                        <small>Member since {{ Auth::user()->created_at }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <!--<a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>-->
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                        @endif
                    </ul>
            </div>
        </nav>
        <div class="wrapper">
            <header id="header" class="parallax1">
                <div class="container">
                    <div class="row ">
                        @yield('content')

                    </div> <!-- wrapper-inner end -->
                </div> <!-- row end -->
            </header>
        </div> <!-- container-fluid end -->
    </body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- jQuery 2.1.4 -->
    {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')!!}

    <!-- Bootstrap 3.3.5 -->
    {!!Html::script('assets/js/bootstrap.min.js')!!}

    <!-- AdminLTE App -->
    {!!Html::script('assets/js/app.min.js')!!}

    <!-- initialize jQuery Library -->
    {!!Html::script('js/jquery.js')!!}
    <!-- Wow Animation -->
    {!!Html::script('js/wow.min.js')!!}
    <!-- Eeasing -->
    {!!Html::script('js/jquery.easing.1.3.js')!!}
    <!-- Counter -->
    {!!Html::script('js/countdown.js')!!}
    <!-- bxslider js -->
    {!!Html::script('/js/jquery.bxslider.min.js')!!}
    {!!Html::script('/js/jquery.backstretch.js')!!}
    {!!Html::script('js/planes.js')!!}
    <!-- Custom js -->
    {!!Html::script('js/custom.js')!!}
    <!-- PAGINADOR-->
    {!!Html::script('js/bootstrap-paginator.js')!!}
    {!!Html::script('js/pagination.js')!!}
<!--    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery-hashchange/v1.3/jquery.ba-hashchange.js')!!}
    {!!Html::script('js/jquery.paging.min.js')!!}-->

</body>
</html>
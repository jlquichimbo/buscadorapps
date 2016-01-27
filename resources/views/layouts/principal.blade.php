<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Planes a la carta</title>

        <!-- Mobile Specific Metas
      ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- CSS
      ================================================== -->
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- FontAwesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Animation -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Bxslider CSS -->
        <link rel="stylesheet" href="css/bxslider.css">
        <!-- Template styles-->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive styles-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Estilos del timeline de resultados-->
        <link rel="stylesheet" href="css/timeline.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <header id="header" class="parallax1">
                <div class="container">
                    <div class="row ">
                        @yield('content')
                        <div class="btn-container m60 col-md-12" align="center">
                            <a href="#" class="active wow fadeInLeft">home</a>
                            <a href="suscribe" class=" wow fadeInLeft">Subscribe now</a>
                            <a href="contact" class="wow fadeInRight">Contact us</a>
                        </div>
                        <div align="center" class="col-md-12">

                            <ul class="list-inline socail-link" align="center">
                                <li><a href="#"><i class="fa fa-facebook wow fadeInRight" data-wow-delay=".2s"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter wow fadeInRight" data-wow-delay=".4s"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus wow fadeInRight" data-wow-delay=".8s"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin wow fadeInRight" data-wow-delay=".1s"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram wow fadeInRight" data-wow-delay="1.1s"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright text-center white col-md-12">
                            <p>&copy; Designed by 
                                <a href="https://www.facebook.com/jOshE091" target="_blank">Jose</a> and developed by 
                                <a href="https://www.facebook.com/PattyVelez11" target="_blank">Paty </a></p>
                            <p>Copyright reserved to both.2016 </p>
                        </div>
                    </div> <!-- wrapper-inner end -->
                </div> <!-- row end -->
        </div> <!-- container-fluid end -->



    </header>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap jQuery -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- initialize jQuery Library -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="js/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="js/countdown.js"></script>
<!-- bxslider js -->
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.backstretch.js"></script>
<script src="js/planes.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- Google Map API Key Source -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

</body>
</html>
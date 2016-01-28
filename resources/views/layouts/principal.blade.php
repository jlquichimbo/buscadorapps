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
        {!!Html::style('assets/css/bootstrap.min.css')!!}
        <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet">-->
        <!-- FontAwesome -->
        {!!Html::style('css/font-awesome.min.css')!!}
        <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
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
        <div class="wrapper">
            <header id="header" class="parallax1">
                <div class="container">
                    <div class="row ">
                        @yield('content')
                       
                    </div> <!-- wrapper-inner end -->
                </div> <!-- row end -->
        </div> <!-- container-fluid end -->



    </header>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')!!}
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap jQuery -->
{!!Html::script('assets/js/bootstrap.min.js')!!}
<!--<script src="assets/js/bootstrap.min.js"></script>-->
<!-- initialize jQuery Library -->
{!!Html::script('js/jquery.js')!!}
<!--<script type="text/javascript" src="js/jquery.js"></script>-->
<!-- Wow Animation -->
{!!Html::script('js/wow.min.js')!!}
<!--<script type="text/javascript" src="js/wow.min.js"></script>-->
<!-- Eeasing -->
{!!Html::script('js/jquery.easing.1.3.js')!!}
<!--<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>-->
<!-- Counter -->
{!!Html::script('js/countdown.js')!!}
<!--<script type="text/javascript" src="js/countdown.js"></script>-->
<!-- bxslider js -->
{!!Html::script('/js/jquery.bxslider.min.js')!!}
<!--<script src="js/jquery.bxslider.min.js"></script>-->
{!!Html::script('/js/jquery.backstretch.js')!!}
<!--<script src="js/jquery.backstretch.js"></script>-->
{!!Html::script('js/planes.js')!!}
<!--<script src="js/planes.js"></script>-->
<!-- Custom js -->
{!!Html::script('js/custom.js')!!}
<!--<script type="text/javascript" src="js/custom.js"></script>-->
<!-- Google Map API Key Source -->
<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->

</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>        
        <script type="text/javascript" src="{{ URL::asset('js/loadWelcome.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css"/>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span9">
                        <div id="welcome" class="hero-unit">
                            <h1>Cliente Web!</h1>
                            <p>NetBeans Project Easel is about combining state of the art HTML5/CSS3/JavaScript client development with Java/REST web services. Enabling the development and customization of flexabilble and performant industry standard client-side interfaces for multiple devices.</p>
                            <input id="inputSearch" type="text" class="form-control" >
                            <p><a id="btnSearch" href='about.html' class='btn btn-primary btn-large'>Buscar &raquo;</a></p>
                        </div>
                        <div class="row-fluid">
                            <h3>Resultados:</h3>
                            <p id="nResults"></p>
                            <div id="json_out">

                            </div>
                        </div><!--/row-->
                    </div><!--/span-->
                </div><!--/row-->

                <!-- TODO Add Footer element here -->


            </div>
        </div>
    </body>
    <script src="{{ URL::asset('js/bootstrap-transition.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-alert.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-modal.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-dropdown.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-scrollspy.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-tab.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-tooltip.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-popover.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-button.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-collapse.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-carousel.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap-typeahead.js') }}"></script>
</html>

<script>
    console.log("Bienvenidos");

    $('#btnSearch').on('click', function (event) {
        console.log('extrayendo datos');

        search_text = $('#inputSearch').val();

        event.preventDefault();//Para que no redirecciones a otro lado
        $.ajax({
//        url: 'http://carbono.utpl.edu.ec:8080/WSSearcher/webresources/serendipityrest?q=java&apikey=123456&source=source&callback=?',
            url: 'http://j4loxa.com/serendipity/plan/browse?q=' + search_text + '&fq=keywords:Abr/2105+-+Ago/2015&wt=json&rows=12',
            type: 'GET',
            dataType: "json",
            jsonp: 'json.wrf',
            async: 'true',
            success: function (data) {
//            console.log(data.response.docs);

                //Creamos una cadena para generar tabla html bootstrap
                table = getTable();

                nResults = data.response.numFound;
                timeResults = data.responseHeader.QTime;

                console.log(nResults);
                console.log(timeResults);

                //Envio el numero de resultados encontrados
                $('#nResults').text('Se han encontrado ' + nResults + ' resultados en ' + timeResults + ' milisegundos.');
                //Foreach para recorrer los datos
                $.each(data.response.docs, function (k, v) {

                    table += '<tr>';
                    table += '<td>' + v.id + '</td>'
                    table += '<td>' + v.subject + '</td>'
                    table += '<td>' + v.title + '</td>'
                    table += '<td>' + v.author + '</td>'
                    table += '<td>' + v.keywords + '</td>'
                    table += '</tr>';
                });

                //cerramos la lista
                table += "</tbody>";
                table += "</table>";

                //Enviamos la cadena html
                console.log(table);
                $('#json_out').html(table);



            },
            error: function () {
                console.log('Error al conectar');

            }
        });
    });

    function getTable() {
        table = "";
        table += '<table class="table table-hover">'
                + '<thead>'
                + '<tr>'
                + '<th>ID</th>'
                + '<th>Asunto</th>'
                + '<th>Titulo</th>'
                + '<th>Autor</th>'
                + '<th>KeyWords</th>'
                + '</tr>'
                + '</thead>'
                + '<tbody>';

        return table;
    }
</script>
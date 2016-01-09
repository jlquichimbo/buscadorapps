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
            $('#nResults').text('Se han encontrado '+nResults+' resultados en '+timeResults+' milisegundos.');
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
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



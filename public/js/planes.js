console.log("Bienvenidos");

$('#btnSearch').on('click', function (event) {
    console.log('extrayendo datos');
//    document.getElementById('timeline_resultados').focus();
//    $( "#timeline_resultados" ).focus();

    search_text = $('#inputSearch').val();

    event.preventDefault();//Para que no redirecciones a otro lado
    $.ajax({
//        url: 'http://j4loxa.com/serendipity/plan/browse?q=' + search_text + '&fq=keywords:Abr/2105+-+Ago/2015&wt=json&rows=12',
        url: 'http://j4loxa.com/serendipity/plan/browse?q=' + search_text + '&wt=json',
        type: 'GET',
        dataType: "json",
        jsonp: 'json.wrf',
        async: 'true',
        success: function (data) {
            //Bajamos el scroll hacia los resultados
            $(window).scrollTop($('#timeline_resultados').offset().top);
            $('#timeline_resultados').show(1000);

//            console.log(data.response.docs);

            //Creamos una cadena para generar el timeline html bootstrap
            timeline = getTimeline();

            nResults = data.response.numFound;
            timeResults = data.responseHeader.QTime;
            var minutosSearch = round((timeResults / 60000), 2);
            var segundosSearch = round((timeResults / 1000), 2);

            //Envio el numero de resultados encontrados
            $('#total_results').text(nResults);
            $('#minutos_search').text(minutosSearch);
            $('#segundos_search').text(segundosSearch);
            $('#nResults').text('Se han encontrado ' + nResults + ' resultados en ' + timeResults + ' milisegundos.');

            //Foreach para recorrer los datos
            var i = 1;
            $.each(data.response.docs, function (k, v) {
                var keyWords = splitKeywords(v.keywords);
                console.log(keyWords);
                //Resultados impares a la izquierda y pares a la derecha
                if (i % 2 != 0) {//impar
                    timeline += '<li>';
                    timeline += '   <div class="timeline-badge">';
                    timeline += '       <a><i class="fa fa-circle" id=""></i></a>';
                    timeline += '   </div>';
                    timeline += '   <div class="timeline-panel">';
                    timeline += '       <div class="timeline-heading">';
                    timeline += '           <h4>' + v.title + '</h4>';
                    timeline += '       </div>';
                    timeline += '       <div class="timeline-body">';
                    timeline += '           <p>' + v.subject + '</p>';
                    timeline += '       </div>';
                    timeline += '       <div class="timeline-footer">';
                    timeline += '           <p>' + v.content_type + '</p>';
                    timeline += '       </div>';
                    timeline += '   </div>';
                    timeline += '</li>';
                } else {//par
                    timeline += '<li class="timeline-inverted">';
                    timeline += '   <div class="timeline-badge">';
                    timeline += '       <a><i class="fa fa-circle" id=""></i></a>';
                    timeline += '   </div>';
                    timeline += '   <div class="timeline-panel">';
                    timeline += '       <div class="timeline-heading">';
                    timeline += '           <h4>' + v.title + '</h4>';
                    timeline += '       </div>';
                    timeline += '       <div class="timeline-body">';
                    timeline += '           <p>' + v.subject + '</p>';
                    timeline += '       </div>';
                    timeline += '       <div class="timeline-footer">';
                    timeline += '           <p>' + v.content_type + '</p>';
                    timeline += '       </div>';
                    timeline += '   </div>';
                    timeline += '</li>';

                }
                i++;
            });

            //Enviamos la cadena html
//            console.log(timeline);
            $('#timeline_resultados').html(timeline);



        },
        error: function () {
            console.log('Error al conectar');

        }
    });
});
function round(value, decimals) {
    return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
}

function getTimeline() {
    timeline = "";
    timeline += '<ul class="timeline">';

    return timeline;
}

function splitKeywords(arrayKeyword) {
    var keyWords = {
    };
    keyWords.institucion = arrayKeyword[0];
    keyWords.tipoDoc = arrayKeyword[1];
    keyWords.tipoDocInformal = arrayKeyword[2];
    keyWords.projectName = arrayKeyword[3];
    keyWords.componentName = arrayKeyword[4];
    keyWords.titulacion = arrayKeyword[5];
    keyWords.periodo = arrayKeyword[6];

    return keyWords;



}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



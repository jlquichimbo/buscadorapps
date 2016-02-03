totalResults = 0;
q = '';
keywords = '';
author = '';
contains = '';
busquedaId = '';

/*Clic en boton buscar*/
$('.btnSearch').on('click', function (event) {
    console.log('Extrayendo datos');
//    document.getElementById('timeline_resultados').focus();
//    $( "#timeline_resultados" ).focus();

    search_text = $('#inputSearch').val();
    keywords_val = $('#keywordSelect').val();
    author_val = $('#authorInput').val();
    contains_val = $('#containsInput').val();
    isLogged = $('#hidden_logged').val();
    isPage = 0;
    q = search_text;
    keywords = keywords_val;
    author = author_val;
    contains = contains_val;

    event.preventDefault();//Para que no redirecciones a otro lado
    searchPlanes(q, 0, keywords, author, contains, isPage, isLogged);
});

function searchPlanes(q, start, keywords, author, contains, isPage, isLogged) {
    $('.loader').show();
    url = 'http://j4loxa.com/serendipity/plan/browse?q=' + q + '&wt=json&start=' + start + '&rows=1';
    if (keywords != -1) {
        keyword = $('#keywordSelect').children(':selected').text();
//        escapeCharsKeywords(q);
//        console.log(keyword);

        url = 'http://j4loxa.com/serendipity/plan/browse?wt=json&start=' + start + '&fq=keywords:' + escapeCharsKeywords(q);
    }
    if (author) {
        alert('author sent');
        url = 'http://j4loxa.com/serendipity/plan/browse?q=' + q + '&wt=json&start=' + start + '&fq=author:' + author;

    }
    if (contains) {
        alert('content sent');
    }

    $.ajax({
//        url: 'http://j4loxa.com/serendipity/plan/browse?q=' + search_text + '&fq=keywords:Abr/2105+-+Ago/2015&wt=json&rows=12',
        url: url,
        type: 'GET',
        dataType: "json",
        jsonp: 'json.wrf',
        async: 'true',
        success: function (data) {
            $('.loader').hide();

            //Bajamos el scroll hacia los resultados
            $(window).scrollTop($('#timeline_resultados').offset().top);
            $('#timeline_resultados').show(1000);
            $('#pagination_div').show(1000);


//            console.log(data.response.docs);

            //Creamos una cadena para generar el timeline html bootstrap
            timeline = getTimeline();

            nResults = data.response.numFound;
            totalResults = nResults; // Asignamos a la variable global
            timeResults = data.responseHeader.QTime;
            var minutosSearch = round((timeResults / 60000), 2);
            var segundosSearch = round((timeResults / 1000), 2);

            //Envio el numero de resultados encontrados
            $('#total_results').text(nResults);
            $('#minutos_search').text(minutosSearch);
            $('#segundos_search').text(segundosSearch);
            $('#nResults').text('Se han encontrado ' + nResults + ' resultados en ' + timeResults + ' milisegundos.');

            //Grabamos la busqueda del usuario logueado
            if (isLogged) {
                userId = $('#user_id').val();
//                console.log(userId);
                saveBusqueda(q, keywords, userId);
            }
            //Foreach para recorrer los datos
            var i = 1;
            $.each(data.response.docs, function (k, v) {
                var keyWords = splitKeywords(v.keywords);
//                console.log(keyWords);
//                console.log(v.content);
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
                    timeline += '           <div class="body-conent col-md-10">';
                    timeline += '            <p>' + v.subject + '</p>';
                    timeline += '            <p><b>Titulación: </b>' + keyWords.titulacion + '</p>';
                    timeline += '            <p><b>Componente: </b>' + keyWords.componentName + '</p>';
                    timeline += '            <p><b>Autor: </b>' + v.author + '</p>';
                    timeline += '           </div>';
                    timeline += '           <div class="body-pdf col-md-2">';
                    timeline += '               <img class="imgpdf" src="images/pdf-icon.png"/>';
                    timeline += '               <a href="#">Dercargar PDF <a/>';
                    timeline += '           </div>';
                    timeline += '       </div>';
                    timeline += '       <div class="timeline-footer col-md-12">';
                    timeline += '           <p class="col-md-10">' + keyWords.periodo + '</p>';
                    if (isLogged) {
                        timeline += '           <a class="bookmarkItem"  idResult="' + v.id + '" onclick="saveBookmark(\'' + v.id + '\')">';
                        timeline += '           <img class="col-md-2" src="images/star.png"/></a>';
                    }
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
                    timeline += '           <div class="body-conent col-md-10">';
                    timeline += '            <p>' + v.subject + '</p>';
                    timeline += '            <p><b>Titulación: </b>' + keyWords.titulacion + '</p>';
                    timeline += '            <p><b>Componente: </b>' + keyWords.componentName + '</p>';
                    timeline += '            <p><b>Autor: </b>' + v.author + '</p>';
                    timeline += '           </div>';
                    timeline += '           <div class="body-pdf col-md-2">';
                    timeline += '               <img class="imgpdf" src="images/pdf-icon.png"/>';
                    timeline += '               <a href="#">Dercargar PDF <a/>';
                    timeline += '           </div>';
                    timeline += '       </div>';
                    timeline += '       <div class="timeline-footer col-md-12">';
                    timeline += '           <p class="col-md-10">' + keyWords.periodo + '</p>';
                    if (isLogged) {
                        timeline += '           <a><img class="col-md-2" src="images/star.png"/></a>';
                    }
                    timeline += '       </div>';
                    timeline += '   </div>';
                    timeline += '</li>';

                }
                i++;
            });

            //Enviamos la cadena html
//            console.log(timeline);
//            document.getElementById("timeline_resultados").innerHTML = timeline;
            $('#timeline_resultados').html(timeline);

            //Llamamos al paginador si no es llamado desde un cambio de pagina
            if (isPage != 1) {
                getPaginator();
            }


        },
        error: function () {
            console.log('Error al conectar');

        }
    });

}

function getNewPage(pageNumber) {

    start = (pageNumber * 10) - 10;
//    console.log(pageNumber);
//    console.log(start);
    searchPlanes(q, start, keywords, author, contains, 1);
}


function convertPdf(data) {
    console.log('Convirtiendo a PDF');
    var file = new Blob([data], {type: 'application/pdf'});
    var fileURL = window.URL.createObjectURL(file);
    var a = $("<a/>", {
        "href": fileURL,
        "download": data.name || "detailPDF"
    }).html('download!').appendTo('body');
    a.click();
    $(window).on('focus', function (e) {
        $('a').remove();
    });
    return a;
}
function round(value, decimals) {
    return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
}

function getTimeline() {
    timeline = "";
    timeline += '<ul class="timeline">';

    return timeline;
}

function splitKeywords(keywords) {
    var arrayKeyword = keywords.toString().split(",");
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

function escapeCharsKeywords(string) {
    newQ = '';
    /*symbols= + - && || ! ( ) { } [ ] ^ " ~ * ? : /  */
    var symbols = ["+", "-", "&&", "||", "!", "(", ")", "{", "}", "[", "]", "^", '"', "~", "*", "?", ":", "/"];
    $.each(symbols, function (i, value) {
        index = string.indexOf(value);
        if (index != -1) {//si se encontro una ocurrencia en el string
            newQ = string.replace(value, "+" + value + "+");//Agregamos los simbolos + para excapar los caracteres
            return newQ;
        } else {
            newQ = string;
        }

    });
    return newQ;

}

function saveBusqueda(q, keywordId, userId) {
    $.ajax({
        method: "POST",
        url: "busqueda/store",
        data: {q: q, keyword_id: keywordId, user_id: userId, num_results: totalResults},
        success: function (data, textStatus, jqXHR) {
            busquedaId = data;
//            console.log('Busqueda: '+busquedaId);
//            alert('Guardado '+data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('No se pudo guardar la busqueda del usuario');
//            alert('Error al guardar');
        }
    });

}

function saveBookmark(resultId){
//    resultId = $(this).attr('idresult').val();
//    console.log('Result: '+resultId);
    $.ajax({
        method: "POST",
        url: "busqueda/storeBookmark",
        data: {busqueda_id: busquedaId, result_id: resultId},
        success: function (data, textStatus, jqXHR) {
//            alert('Guardado '+data);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log('No se pudo guardar la busqueda del usuario');
//            alert('Error al guardar');
        }
    });
    
}

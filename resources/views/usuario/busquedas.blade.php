@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Texto Buscado</th>
                        <th>N. Resultados</th>
                        <th>Filtrado por</th>
                        <th>Fecha / Hora</th>
                        <!--<th>Hora</th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($busquedas as $busqueda)
                        <tr>
                            <td>{{$busqueda->busqueda}}</td>
                            <td>{{$busqueda->num_resultados}}</td>
                            <td>{{$busqueda->keyword_name}}</td>
                            <td>{{$busqueda->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
</div>
@stop
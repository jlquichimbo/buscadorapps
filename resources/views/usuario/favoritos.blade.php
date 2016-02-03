@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row ">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Buscaste</th>
                        <th>Nombre del recurso</th>
                        <th>Filtrado por</th>
                        <th>Fecha registrado</th>
                        <th>Link</th>
                        <!--<th>Hora</th>-->
                    </tr>
                </thead>
                <tbody>
                    @foreach($favoritos as $favorito)
                        <tr>
                            <td>{{$favorito->busqueda}}</td>
                            <td>{{$favorito->result_id}}</td>
                            <td>{{$favorito->keyword_name}}</td>
                            <td>{{$favorito->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

    </div>
</div>
@stop
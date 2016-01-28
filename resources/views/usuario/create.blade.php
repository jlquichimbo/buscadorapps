@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row ">
        <div class="wrapper-inner text-center">
            <h2 class="title">Registrate</h2>
            <div class="contact-inner">
                {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {!!Form::label('Nombre')!!}
                        {!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Elige un nombre de usuario.', 'required' => 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('Email')!!}
                        {!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Ingresa tu email', 'required' => 'required'])!!}

                    </div>
                    <div class="form-group">
                        {!!Form::label('Password')!!}
                        {!!Form::password('password', ['class'=>'form-control', 'required' => 'required'])!!}

                    </div>
                    {!!Form::submit('Registrar', ['class'=>'wow bounceInLeft animated'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

@stop
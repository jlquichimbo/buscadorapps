@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row ">
        <div class="wrapper-inner text-center">
            <p class="sub-title">Registrate a nuestro servicio y accede a mas utilidades, guardar tus favoritos, tus busquedas y compartir.</p>
            <div class="sub-form ">
                    {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
                    <div class="form-group">
                        {!!Form::label('Nombres', 'Nombres', ['class'=>'sub-title'])!!}
                        {!!Form::text('name', null, ['class'=>'form-control wow bounceInLeft', 'placeholder'=>'Ingresa tus nombres.'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('Email', 'Email',  ['class'=>'sub-title'])!!}
                        {!!Form::email('email', '', ['class'=>'form-control wow bounceInLeft', 'placeholder'=>'Ingresa tu email'])!!}

                    </div>
                    <div class="form-group">
                        {!!Form::label('Password', 'Password',  ['class'=>'sub-title'] )!!}
                        {!!Form::password('password', ['class'=>'form-control wow bounceInLeft'])!!}

                    {!!Form::submit('Registrar', ['class'=>'form-button btn btn-primary wow bounceInLeft'])!!}
                    </div>
                    {!!Form::close()!!}
            </div>
            <div class="btn-container m60">
                <a href="index" class=" wow bounceInDown" data-wow-delay=".1s">Home</a>
                <a href="#" class=" active wow bounceInDown" data-wow-delay=".3s">Suscríbete</a>
                <a href="contact" class=" wow bounceInDown" data-wow-delay=".8s">Contáctanos</a>
            </div>
            <ul class="list-inline socail-link">
                <li><a href="{{url("social/facebook")}}"><i class="fa fa-facebook wow fadeInRight" data-wow-delay=".2s"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter wow fadeInRight" data-wow-delay=".4s"></i></a></li>
                <li><a href="{{url("social/google")}}"><i class="fa fa-google-plus wow fadeInRight" data-wow-delay=".8s"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin wow fadeInRight" data-wow-delay=".1s"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram wow fadeInRight" data-wow-delay="1.1s"></i></a></li>
            </ul>
            <div class="copyright text-center white ">
                <p>&copy; Designed and developed by 
                    <a href="https://www.facebook.com/jOshE091" target="_blank">Jose Luis</a>
                    <!--<a href="https://www.facebook.com/PattyVelez11" target="_blank">Paty </a></p>-->
                <p>Copyright reserved to both.2016 </p>
            </div>
        </div> <!-- wrapper-inner end -->
    </div> <!-- main-conainer end -->
</div> <!-- container-fluid end -->
@stop


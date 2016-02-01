@extends('layouts.principal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!--            <div class="panel panel-default">
                            <div class="panel-heading">Login</div>-->
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-12  sub-title">E-Mail:</label>

                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-12  sub-title">Password:</label>

                        <div class="col-md-12">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i>Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>



            <!--</div>-->
            <div align="center" class="btn-container m60">
                <a href="index" class=" wow bounceInDown" data-wow-delay=".1s">Home</a>
                <a href="suscribe" class=" active wow bounceInDown" data-wow-delay=".3s">Suscríbete</a>
                <a href="contact" class=" wow bounceInDown" data-wow-delay=".8s">Contáctanos</a>
            </div>
            <div align="center">

                <ul  class="list-inline socail-link">
                    <li><a href="{{url("social/facebook")}}"><i class="fa fa-facebook wow fadeInRight" data-wow-delay=".2s"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter wow fadeInRight" data-wow-delay=".4s"></i></a></li>
                    <li><a href="{{url("social/google")}}"><i class="fa fa-google-plus wow fadeInRight" data-wow-delay=".8s"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin wow fadeInRight" data-wow-delay=".1s"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram wow fadeInRight" data-wow-delay="1.1s"></i></a></li>
                </ul>
            </div>
            <div class="copyright text-center white ">
                <p>&copy; Designed and developed by 
                    <a href="https://www.facebook.com/jOshE091" target="_blank">Jose Luis</a>
                    <!--<a href="https://www.facebook.com/PattyVelez11" target="_blank">Paty </a></p>-->
                <p>Copyright reserved to both.2016 </p>
            </div>
        </div>
    </div>

</div>
@endsection

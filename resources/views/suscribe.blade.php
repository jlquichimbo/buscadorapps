@extends('layouts.principal')
@section('content')
<div class="container">
    <div class="row ">
        <div class="wrapper-inner text-center">
            <p class="sub-title">Get before everybody the notification when our website will launched. Your email address will be use strictly for this notification.</p>
            <div class="sub-form ">
                <form class="subscribe-form">
                    <input type="text" class="form-control wow bounceInLeft" placeholder="your email">
                    <button class="btn btn-primary submit-input wow bounceInRight">Subscribe now</button>
                </form>
            </div>
            <div class="btn-container m60">
                <a href="index" class=" wow bounceInDown" data-wow-delay=".1s">Home</a>
                <a href="#" class=" active wow bounceInDown" data-wow-delay=".3s">Subscribe now</a>
                <a href="contact" class=" wow bounceInDown" data-wow-delay=".8s">Contact us</a>
            </div>
            <ul class="list-inline socail-link">
                <li><a href="#"><i class="fa fa-facebook wow fadeInRight" data-wow-delay=".2s"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter wow fadeInRight" data-wow-delay=".4s"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus wow fadeInRight" data-wow-delay=".8s"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin wow fadeInRight" data-wow-delay=".1s"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram wow fadeInRight" data-wow-delay="1.1s"></i></a></li>
            </ul>
            <div class="copyright text-center white ">
                <p>&copy; Designed by 
                    <a href="https://www.behance.net/towkirbappy" target="_blank">Bappy</a> and developed by 
                    <a href="https://www.behance.net/esrat91" target="_blank">Themeturn </a></p>
                <p>Copyright reserved to both.2015 </p>
            </div>
        </div> <!-- wrapper-inner end -->
    </div> <!-- main-conainer end -->
</div> <!-- container-fluid end -->
@stop


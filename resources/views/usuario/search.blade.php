@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row ">
        <!--<div class="wrapper-inner text-center">-->
        <div class="text-center">
            <div class="text-center">
                <!-- start timer, reference to js/countdown.js -->
                <div id="timer" class=" wow flipInY">
                    <span class="countdown_row countdown_show3">
                        <span class="countdown_section large-3 medium-3 columns">
                            <span id="total_results" class="countdown_amount">0</span>
                            <br>
                            Resultados
                        </span>
                        <span class="countdown_section large-3 medium-3 columns">
                            <span id="minutos_search" class="countdown_amount">0</span>
                            <br>
                            Minutos
                        </span>
                        <span class="countdown_section large-3 medium-3 columns">
                            <span id="segundos_search" class="countdown_amount">0</span>
                            <br>
                            Segundos
                        </span>
                    </span>
                </div>
                <!-- end timer -->
                <!--campo de busquedas-->

                <div id="search_plan">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group" id="adv-search">
                                    <input style="color: #006699; font-weight: bold;" id="inputSearch" type="text" class="form-control" placeholder="Busqueda de planes" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
                                            <div class="dropdown dropdown-lg">
                                                <button type="button" class="btn btn-default dropdown-toggle wow bounceInRight" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group">
                                                            <label for="filter">Filter by</label>
                                                            <select class="form-control">
                                                                <option value="0" selected>All Snippets</option>
                                                                <option value="1">Featured</option>
                                                                <option value="2">Most popular</option>
                                                                <option value="3">Top rated</option>
                                                                <option value="4">Most commented</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contain">Author</label>
                                                            <input class="form-control" type="text" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="contain">Contains the words</label>
                                                            <input class="form-control" type="text" />
                                                        </div>
                                                        <button   type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                    </form>
                                                </div>
                                            </div>
                                            <button id="btnSearch"  type="button" class="btn btn-primary submit-input wow bounceInRight"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end busqueda-->
                <!--div de resultados-->
                <div id="timeline_resultados" align='LEFT'></div>
                <!--fin div resultados-->
                <!--div de loading-->
                <div class="loader">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--div paginador-->
                <div id="pagination_div" align='center'></div>
                <!--fin div resultados-->
                <div class="btn-container m60 col-md-12" align="center">
                    <a href="#" class="active wow fadeInLeft">home</a>
                    <a href="suscribe" class=" wow fadeInLeft">Suscríbete</a>
                    <a href="contact" class="wow fadeInRight">Contáctanos</a>
                </div>
            </div> <!-- wrapper-inner end -->
        </div> <!-- row end -->
    </div> <!-- container-fluid end -->
    @stop
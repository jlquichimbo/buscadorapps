<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PruebaController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return "Prueba desde controller";
    }
    public function nombre($nombre)
    {
        return "Controller Mi nombre es ".$nombre;
    }
}

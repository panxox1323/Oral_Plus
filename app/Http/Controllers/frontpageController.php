<?php

namespace Oral_Plus\Http\Controllers;

use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Oral_Plus\Http\Requests;
use Oral_Plus\Http\Controllers\Controller;

class frontpageController extends Controller
{


    public function especialidades()
    {
        return view('frontend/especialidades');
    }

    public function promociones()
    {
        return view('frontend/promociones');
    }

    public function instalaciones()
    {
        return view('frontend.instalaciones');
    }

    public function tratamientos()
    {
        return view('frontend.tratamientos');
    }

    public function cita()
    {
        return view('frontend.cita');
    }
}

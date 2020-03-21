<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusesController extends Controller
{
    public function ggaba()
    {
        return view('frontend.campuses.ggaba');
    }

    public function masaka()
    {
        return view('frontend.campuses.masaka');
    }

    public function lweero()
    {
        return view('frontend.campuses.lweero');
    }

    public function jinja()
    {
        return view('frontend.campuses.jinja');
    }

    public function mutundwe()
    {
        return view('frontend.campuses.mutundwe');
    }

    public function kitengela()
    {
        return view('frontend.campuses.kitengela');
    }
}

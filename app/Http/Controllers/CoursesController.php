<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function csit()
    {
        return view('frontend.courses.undergraduate.csit');
    }

    public function businessAdministration()
    {
        return view('frontend.courses.undergraduate.business-administration');
    }

    public function agriculture()
    {
        return view('frontend.courses.undergraduate.agriculture');
    }

    public function education()
    {
        return view('frontend.courses.undergraduate.education');
    }

    public function naturalSciences()
    {
        return view('frontend.courses.undergraduate.natural-sciences');
    }

    public function nursing()
    {
        return view('frontend.courses.undergraduate.nursing');
    }

    public function arts()
    {
        return view('frontend.courses.undergraduate.arts');
    }

    public function industrialArt()
    {
        return view('frontend.courses.undergraduate.industrial-art');
    }

    public function publicAdministration()
    {
        return view('frontend.courses.undergraduate.public-administration');
    }

    public function filmSchool()
    {
        return view('frontend.courses.undergraduate.film-school');
    }
}

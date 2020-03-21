<?php

namespace App\Http\Controllers;

use App\Update;
use Illuminate\Http\Request;

class KuPagesController extends Controller
{
    public function admissions()
    {
        return view('frontend.pages.admissions');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function home()
    {
        $updates = Update::all();
        return view('frontend.pages.home', ['updates' => $updates] );
    }

    public function accomodation()
    {
        return view('frontend.pages.accomodation');
    }

    public function apply()
    {
        return view('frontend.pages.apply');
    }

    public function campuses()
    {
        return view('frontend.pages.campuses');
    }

    public function council()
    {
        return view('frontend.pages.council');
    }

    public function library()
    {
        return view('frontend.pages.library');
    }

    public function postgraduates()
    {
        return view('frontend.pages.postgraduates');
    }

    public function undergraduates()
    {
        return view('frontend.pages.undergraduates');
    }

    public function research()
    {
        return view('frontend.pages.research');
    }

    public function sports()
    {
        return view('frontend.pages.sports');
    }

    public function studentsWithDisabilities()
    {
        return view('frontend.pages.studentswithdisabilities');
    }

    public function alumni()
    {
        return view('frontend.pages.alumni ');
    }

    public function cisco()
    {
        return view('frontend.pages.cisco');
    }

    public function qualityAssurance()
    {
        return view('frontend.pages.quality-assurance');
    }

    public function uniLife()
    {
        return view('frontend.pages.uni-life');
    }

    public function vc()
    {
        return view('frontend.pages.vc');
    }

    public function internationalAdmission()
    {
        return view('frontend.pages.international-admission');
    }
}

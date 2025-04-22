<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    public function backgrounds()
    {
        return view('pages.backgrounds');
    }
    public function borders()
    {
        return view('pages.borders');
    }
    public function display()
    {
        return view('pages.display');
    }
    public function flex()
    {
        return view('pages.flex');
    }
    public function height()
    {
        return view('pages.height');
    }
    public function margin()
    {
        return view('pages.margin');
    }
    public function padding()
    {
        return view('pages.padding');
    }
    public function position()
    {
        return view('pages.position');
    }
    public function width()
    {
        return view('pages.width');
    }
    public function extras()
    {
        return view('pages.extras');
    }
}

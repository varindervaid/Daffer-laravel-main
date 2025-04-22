<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form_elements()
    {
        return view('pages.form-elements');
    }
    public function form_advanced()
    {
        return view('pages.form-advanced');
    }
    public function form_layouts()
    {
        return view('pages.form-layouts');
    }
    public function form_validations()
    {
        return view('pages.form-validations');
    }
    public function form_wizards()
    {
        return view('pages.form-wizards');
    }
    public function form_editor()
    {
        return view('pages.form-editor');
    }
    public function form_element_sizes()
    {
        return view('pages.form-element-sizes');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function profile()
    {
        return view('pages.profile');
    }
    public function aboutus()
    {
        return view('pages.aboutus');
    }
    public function settings()
    {
        return view('pages.settings');
    }
    public function invoice()
    {
        return view('pages.invoice');
    }
    public function pricing()
    {
        return view('pages.pricing');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function notifications_list()
    {
        return view('pages.notifications-list');
    }
    public function faqs()
    {
        return view('pages.faqs');
    }
    public function danger_message()
    {
        return view('pages.danger-message');
    }
    public function success_message()
    {
        return view('pages.success-message');
    }
    public function warning_message()
    {
        return view('pages.warning-message');
    }
    public function empty_page()
    {
        return view('pages.empty-page');
    }
    public function switcher()
    {
        return view('pages.switcher');
    }
}

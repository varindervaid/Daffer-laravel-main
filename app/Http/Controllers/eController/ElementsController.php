<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementsController extends Controller
{
    public function accordions()
    {
        return view('pages.accordions');
    }
    public function alerts()
    {
        return view('pages.alerts');
    }
    public function avatars()
    {
        return view('pages.avatars');
    }
    public function breadcrumbs()
    {
        return view('pages.breadcrumbs');
    }
    public function buttons()
    {
        return view('pages.buttons');
    }
    public function badges()
    {
        return view('pages.badges');
    }
    public function dropdowns()
    {
        return view('pages.dropdowns');
    }
    public function thumbnails()
    {
        return view('pages.thumbnails');
    }
    public function list_groups()
    {
        return view('pages.list-groups');
    }
    public function navigations()
    {
        return view('pages.navigations');
    }
    public function paginations()
    {
        return view('pages.paginations');
    }
    public function popovers()
    {
        return view('pages.popovers');
    }
    public function progress()
    {
        return view('pages.progress');
    }
    public function spinners()
    {
        return view('pages.spinners');
    }
    public function media_object()
    {
        return view('pages.media-object');
    }
    public function typography()
    {
        return view('pages.typography');
    }
    public function tooltips()
    {
        return view('pages.tooltips');
    }
    public function toast()
    {
        return view('pages.toast');
    }
    public function tags()
    {
        return view('pages.tags');
    }
    public function tabs()
    {
        return view('pages.tabs');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvancedUIController extends Controller
{
    public function calendar()
    {
        return view('pages.calendar');
    }
    public function carousel()
    {
        return view('pages.carousel');
    }
    public function collapse()
    {
        return view('pages.collapse');
    }
    public function chat()
    {
        return view('pages.chat');
    }
    public function cards_page()
    {
        return view('pages.cards-page');
    }
    public function contacts()
    {
        return view('pages.contacts');
    }
    public function modals()
    {
        return view('pages.modals');
    }
    public function timeline()
    {
        return view('pages.timeline');
    }
    public function draggablecards()
    {
        return view('pages.draggablecards');
    }
    public function sweet_alerts()
    {
        return view('pages.sweet-alerts');
    }
    public function ratings()
    {
        return view('pages.ratings');
    }
    public function search()
    {
        return view('pages.search');
    }
    public function userlist()
    {
        return view('pages.userlist');
    }
    public function notifications()
    {
        return view('pages.notifications');
    }
    public function treeview()
    {
        return view('pages.treeview');
    }
}

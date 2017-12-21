<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function home()
    {
       return view('contacts.home');
    }
    public function aboutme()
    {
        return view('contacts.aboutme');
    }
    public function research()
    {
        return view('contacts.research');
    }
    public function academic()
    {
        return view('contacts.academic');
    }
    public function web()
    {
        return view('contacts.web');
    }
    public function contact()
    {
        return view('contacts.contact');
    }
}

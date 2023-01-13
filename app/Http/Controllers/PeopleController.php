<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        return view('pages.people.index');
    }
    
    public function feed()
    {
        return view('pages.people.feed');
    }
    
}

<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store()
    {
        return view('stores');
    }
    
    
}

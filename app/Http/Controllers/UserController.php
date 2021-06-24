<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('user.index', compact('events'));
    }
}

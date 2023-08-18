<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $topics = Topic::all();
        return view('home', compact('topics'));
    }
}

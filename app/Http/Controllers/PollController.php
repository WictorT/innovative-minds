<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PollController extends Controller
{
    public function home(Request $request)
    {
        $surveys = [];
        return view('home', compact('surveys'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Film;


class FilmsController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::latest()->get();
        return view('films/index',compact('films'));
    }

    
}

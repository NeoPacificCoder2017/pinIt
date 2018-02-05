<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::all()->sortByDesc('created_at');
        $categories = Category::all()->sortBy('title');

        return view('home')->with(['links' => $links, 'categories' => $categories]);
    }
}

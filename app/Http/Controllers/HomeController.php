<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pages.home', [
            'show_navbar' => true,
            'show_footer' => true
        ]);
    }

    public function menu()
    {
        return view('pages.menu', [
            'show_navbar' => true,
            'trans_navbar' => false,
            'show_footer' => true
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Kopiqu!';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function items(){
        $data = array(
            'title' => 'List of items',
            // change to fetch from DB
            'items' => ['a','b','c']
        );
        return view('pages.items')->with($data);
    }

    public function cart(){
        return view('pages.cart');
    }
}

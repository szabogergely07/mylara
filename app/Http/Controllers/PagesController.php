<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome Everybody!!!';
        //return view('pages.index', compact('title'));//one way to do it
        return view('pages.index')->with('title', $title);//other way to do it
    }

    public function about(){
        return view('pages.about');
    }

    public function myprojects(){
        return view('pages.myprojects');
    }
}

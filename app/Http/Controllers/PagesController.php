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
/*
    public function services(){
        $data = array(
            'title' => 'Services!',
            'services' => ['Web Design', 'Programming', 'SEO']
        );//it works also with an array
        return view('pages.services')->with($data);
    }*/
    public function myprojects(){
        return view('pages.myprojects');
    }

    public function search_engine(){
        return view('search.results');
    }
}

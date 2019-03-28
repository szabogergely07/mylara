<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Post;
use DB;

class SearchController extends Controller
{
    public function search(){

        $search_input = Input::get('search_input');
            if($search_input != ""){
                $user = User::where('name', 'LIKE', '%' . $search_input . '%')
                            ->orWhere('email', 'LIKE', '%' . $search_input . '%')
                            ->get();
            if(count($user) > 0)
                return view('search.result')->withDetails($user)->withQuery($search_input);
        }
                return view('search.result')->withMessage("No user found");
    }
}
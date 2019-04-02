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

    public function usersearch(){
            $search_input = Input::get('search_input');
            $user = User::where('name', 'LIKE', '%' . $search_input . '%')
                            ->orWhere('email', 'LIKE', '%' . $search_input . '%')
                            ->get();
            $post = Post::where('title', 'LIKE', '%' . $search_input . '%')
                            ->orWhere('body', 'LIKE', '%' . $search_input . '%')
                            ->get();
            if(empty($search_input)){
                return view('search.result')->withMessage("Please type something into SEARCH-field");
            }
            
            elseif(count($post) < 1 && count($user) < 1){
                return view('search.result')->withQuery($search_input)->withMessage3("Nothing found");
            }

            elseif(count($post) < 1){
                return view('search.result')->withQuery($search_input)->withDetails($user)->withMessage2("No Post found");
            }

            elseif(count($user) < 1){
                return view('search.result')->withQuery($search_input)->withDetails2($post)->withMessage("No User found");
            }

            else{

                return view('search.result')->withQuery($search_input)->withDetails($user)->withDetails2($post);
            }  
    }
}
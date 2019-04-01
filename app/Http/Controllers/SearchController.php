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

            elseif(count($user) < 1){
                return view('search.result')->withMessage("Nothing found");
            }

            else{

                return view('search.result')->withDetails($user)->withDetails2($post)->withQuery($search_input);
            }  
    }
}
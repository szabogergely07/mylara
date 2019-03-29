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
            $user = User::where('name', 'LIKE', '%' . $search_input . '%')
                            ->orWhere('email', 'LIKE', '%' . $search_input . '%')
                            ->get();
            if(empty($search_input)){
                echo "empty";
                //return view('search.result')->withMessage("empty");
            }

            elseif(count($user) < 1){
                return view('search.result')->withMessage("No user found");
            }

            else{

                return view('search.result')->withDetails($user)->withQuery($search_input);
            }  
    }
}
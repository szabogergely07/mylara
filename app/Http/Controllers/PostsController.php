<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;//find in laravel documentation
use App\Post;
use DB;

class PostsController extends Controller
{
     /**
     * Create a new controller instance.
     *that blocks visitors to edit or create a post without logging in
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);//added an exception wit an array
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $posts = Post::all();
       $posts = Post::orderBy('created_at', 'desc')->paginate(1);
       //organise the Posts by created_at(date) and add pagination(every page has 1 post)
        //$posts = Post::orderBy('title', 'desc')->get();
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999' //the file has to be an image|validated after upload|less than 2 MB(because often thats Apache server limitation)
        ]);

        //Handle File Upload...checks if the user clicked on button and selected file to upload
        if($request->hasFile('cover_image')){
            //Get filename with the extension...will put the actual file name what was uploaded
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename...it gets only the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension...like jpg or img or pic...
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to Store ...it stores name and time and an extension(to make file unique)
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image...create a folder and saves file there(run ->artisan storage:link)
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';//if user do not upload image, uses that default to display
        }

        //create Post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;//authenticate the access to user_id//||get currently logged in user and put it into user_id
        $post->cover_image = $fileNameToStore;//either posts image or noimage.jpg
        $post->save();                         

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);

        //Check for correct user
        //if it is not equal to user id, than redirect to post, with an error message
        if(auth()->user()->id !==$post->user_id){
            return redirect('/mylara/public/posts')->with('error', 'Unauthorized page');
        }

        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

         //Handle File Upload
         if($request->hasFile('cover_image')){
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to Store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        }

        //create Post
        $post = Post::find($id);//does not create a new post, but find the edited
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;// let change the image
        }

        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
            //prevent for users to delete other users posts
        if(auth()->user()->id !==$post->user_id){
            return redirect('/mylara/public/posts')->with('error', 'Unauthorized page');
        }
            //if the cover img not equal to noimage, than delet image
        if($post->cover_image != 'noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');

    }
}

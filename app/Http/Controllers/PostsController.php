<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comments;
use App\User;

class PostsController extends Controller

{


   public function __construct()

   {

       $this->middleware('auth');

   }


   public function index(){

       $posts = Post::all();
       $comments = Comments::all();
       $users = User::all();
       return view('posts.list')->with('posts', $posts)->with('comments',$comments)->with('users', $users);

   }


   public function create() {

       return view('posts.create');

   }


   public function store(){

       request()->validate([

           'image_path' => ['required', 'image']          

       ]);      

       $post = Post::create([

           'user_id' => auth()->id(),

           'image_path' => request()->file('image_path')->store('posts', 'public'),

           'description' => request('description'),

           'filter' => request('filter'),

           'likes' => 0

       ])->save();


       return redirect('home');

   }

   public function like ($id) { 
      $post_like = Post::findOrFail($id);
      $person_like = Auth()->user()->id;
    if ($post_like->person_like != $person_like) {
      $post_like->person_like = $person_like;
      $post_like->likes += 1;
      $post_like->save();
      $posts = Post::all();
      return view('posts.list')->with('posts', $posts);
    } else {
      $post_like->likes = $post_like->likes;
      $posts = Post::all();
      return view('posts.list')->with('posts', $posts);
    }

   }

     public function deslike($id){
    $post_like = Post::findOrFail($id);
    $person_like = Auth()->user()->id;
    if ($post_like->likes > 0) {
      if ($post_like->person_like == $person_like) {
        $post_like->person_like = 0;
        $post_like->likes -=1;
        $post_like->save();
        $posts = Post::all();
        return view('posts.list')->with('posts', $posts);
      } else {
        $posts = Post::all();
        return view('posts.list')->with('posts', $posts);
      }
    } else {
        $posts = Post::all();
        return view('posts.list')->with('posts', $posts);
    }
    
    
}

}
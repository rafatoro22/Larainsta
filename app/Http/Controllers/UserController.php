<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comments;

class UserController extends Controller
{
    public function index(){
    	$postUser = array();
    	$id_user = Auth()->id();
    	$post = Post::all();
    	foreach ($post as $posts) {
    		if ($posts['id_user'] == $id_user){
    			$postUser[] = $posts;
    		}
    	}
    	$user = User::all();
    	$comments = Comments::all();
    	return view('myAccount')->with('id_user', $id_user)->with('posts', $postUser)->with('user',$user)->with('comments', $comments);
 }
}
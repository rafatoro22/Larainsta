<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function comment ($id) {
        	$comments = comments::create([

           'user_id' => auth()->id(),

           'post_id' => $id,

           'comment' => request('comment'),

       ])->save();

       return redirect()->route('listar');
       // request represent post no laravel. 
       //$comment = $_POST['comment'];	
        }
    	
    }



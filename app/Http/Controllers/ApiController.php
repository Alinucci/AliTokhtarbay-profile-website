<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    public function index(Request $request){
        $post = Post::all();

        return response($post, 200);
    }

    public function get_inf(Request $request){
        $post = Post::find($request->post_id);
        
        if($post == null){
            return response(['message' => 'There is no information'], 404);
        }
        return response($post, 200);
    }
}

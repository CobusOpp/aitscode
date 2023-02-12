<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('post_search')){
            $posts = Post::search($request->post_search)
                ->paginate(7);
        }else{
            $posts = Post::paginate(7);
        }
        return view('welcome', compact('posts'));
    }
    public function fullTextSearch(Request $request)
    {
        $this->validate($request,['post_name'=>'required']);
        $posts = Post::create($request->all());
        return back();
    }
}

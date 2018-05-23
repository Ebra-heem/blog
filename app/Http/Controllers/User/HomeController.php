<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Category;
use App\Model\user\Tag;
class HomeController extends Controller
{
    public function index(){
        $posts = Post::where('status',1)->paginate(5);
        return view('user.post.blog', compact('posts'));
    }
    
    public function tag(Tag $tag){
        $posts = $tag->posts();
        
        return view('user.post.blog', compact('posts'));
    }
    
    public function category(Category $category){
        $posts = $category->posts();
        return view('user.post.blog',compact('posts'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Categories;
use App\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    public function index()
    {
        $priorPosts = Posts::where('priority', 1)->get();
        $posts = Posts::where('priority', 0)->get();
        $categories = Categories::all();
        $user = Auth::user();


        
        return view('posts.index', ['priorPosts'=>$priorPosts, 'posts'=>$posts, 'categories'=>$categories, 'user'=>$user]);
    }


    public function show($id)
    {
        $categories = Categories::all();
        $post = Posts::find($id);
        $user = Auth::user();
        return view('posts.show', ['post'=>$post, 'categories'=>$categories, 'user'=>$user]);
    }


    
    public function create()
    {
        $categories = Categories::all();
        $user = Auth::user();
        return view('posts.create', ['categories'=>$categories, 'user'=>$user]);
    }
        
    public function save(Request $request)
    {
        $user = Auth::user();

       
        $validator = Validator::make($request->all(), 
                [
                    'title'=>'required',
                    'content'=>'required',
                    'categories_id'=>'required'
                ]);
        
        $postNew = new Posts();
        $data = [
                    $postNew->title = $request->get('title'),
                    $postNew->content = $request->get('content'),
                    $postNew->categories_id = $request->get('categories_id'),
                    $postNew->users_id = $user['id']];


        $postNew->save($data);
     
        return redirect('/');
    }
    
    public function getPostsByCategory($id)
    {
        $categories = Categories::all();
        $category = Categories::find($id);
        $categorizedPosts = Posts::where('categories_id', $id)->get();
        $user = Auth::user();
        return view('posts.postsbycat', ['categories'=>$categories, 'categorizedPosts'=>$categorizedPosts, 'category'=>$category, 'user'=>$user]);
    }

    public function showByAuthor($id)
    {
        $users = User::all();
        $user = User::find($id);
        $categories = Categories::all();
        $postsByAuthor = Posts::where('users_id', $id)->get();

        return view('posts.postsByAuthor', ['categories'=>$categories, 'postsByAuthor'=>$postsByAuthor, 'users'=>$users, 'user'=>$user]);
    }




}

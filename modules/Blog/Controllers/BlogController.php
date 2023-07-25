<?php

namespace Modules\Blog\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Models\Auth;
use Modules\Blog\Models\Blog;
use Modules\Blog\Models\BlogCategory;
use Modules\Blog\Models\Tag;

class BlogController extends Controller
{
    public function index(Request $request) {

        $query = Blog::query();

        if ($category_id = $request->query('category_id')) {
            $query->where('category_id', $category_id);
        }

        if($search = $request->query('search')){
            $query->where('title','like','%'.$search.'%');
        }

        $blogs = $query->paginate(6)->withQueryString();

        $categories = BlogCategory::all();

        $recent_posts = Blog::orderBy('created_at','desc')->limit(3)->get();

        $tags = Tag::all();

        return view('Blog::frontend.index',compact('blogs','categories','recent_posts','tags'));
    }

    public function detail($slug) {
        return view('Blog::frontend.detail');
    }

    public function tag($tagName, Request $request) {

        $tag = Tag::query()->where('name',$tagName)->first();

        if(!$tag){
            abort(404);
        }

        $query = Blog::query();

        $query->join('blog_tag','blogs.id','=','blog_tag.blog_id');

        $query->where('blog_tag.tag_id',$tag->id);

        $blogs = $query->paginate(2)->withQueryString();


        $categories = BlogCategory::all();

        $recent_posts = Blog::orderBy('created_at','desc')->limit(3)->get();

        $tags = Tag::all();

        return view('Blog::frontend.index',compact('blogs','categories','recent_posts','tags'));
    }


}

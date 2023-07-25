<?php


namespace Modules\Blog\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Modules\Blog\Models\Auth;
use Modules\Blog\Models\Blog;
use Modules\Blog\Models\BlogCategory;
use Modules\Blog\Models\Tag;

class BlogController extends Controller
{


    public function index(Request $request)
    {
        $search = $request->query('s');
        $cate_id = $request->query('cate_id');

        if (!empty($search) | !empty($cate_id)) {
            $blogs = Blog::query()->where('title', 'like', '%'.$search.'%')->where('category_id', $cate_id)->get();
        } else {
            $blogs = Blog::all();
        }

        $categories = BlogCategory::all();

        return view('Blog::admin.index', compact('blogs','categories'));
    }

    public function create()
    {
        $tags = Tag::all();
        $categories = BlogCategory::all();

        return view('Blog::admin.create', compact('tags','categories'));
    }

    public function get_tag(Request $request)
    {
        $tags = [];
        if ($search = $request->name) {
            $tags = Tag::query()->where('name', 'like', '%'.$search.'%')->get();
        }
        return response()->json($tags);
    }

    public function store(Request $request, $id = '')
    {

        $id = $request->id;

        if ($id) {
            $blog = Blog::query()->find($id);
        } else {
            $blog = new Blog();
        }

        // Validate
        /*$request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'auth_id' => 'required|not_in:0',
            'category_id' => 'required|not_in:0',
            'tag_id' => 'required',
            'content' => 'required',
            'banner' => 'required|image',
        ]);*/


        $keys = [
            'title',
            'subtitle',
            'content',
            'category_id'
        ];

        foreach ($keys as $key) {
            $blog->setAttribute($key, $request->input($key));
        }

        if ($request->input('status') == 'publish') {
            $blog->status = 'publish';
        } elseif ($request->input('status') == 'draft') {
            $blog->status = 'draft';
        }

        $image = $request->file('banner');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('banner')->storeAs('public/uploads/blog/banners', $image_name);
        $blog->banner = $image_name;

        $blog->save();

        $oldTags = $blog->tags;
        $newTags = $request->input['tags'];
        $delTags = array_diff($oldTags, $newTags);
        $addTags = array_diff($newTags, $oldTags);

        $tagId = array_search($tag, $delTags);


        $tags = $request->input('tags');
        $blog->tags()->sync($tags);


        if ($id) {
            return back()->with('success', ("Update successfully!"));
        } else {
            return back()->with('success', ("Create successfully!"));
        }
    }

    public function edit(Request $request, $id = '')
    {

        $blog = Blog::find($id);
        if (!$blog) {
            abort(404);
        }

        $auths = Auth::all();
        $categories = BlogCategory::all();
        $tags = Tag::all();

        return view('Blog::admin.create', compact('blog', 'auths', 'categories', 'tags'));
    }

    public function action(Request $request)
     {
         $ids = $request->ids;

         if ($request->input('action') == 'delete') {

             Blog::query()->whereIn('id', $ids)->delete();

             Tag::query()->whereIn('id', $ids)->delete();

             return back()->with('success', ("Delete successfully!"));

         } elseif ($request->input('action') == 'publish') {

             Blog::query()->whereIn('id', $ids)->update(['status'=>'publish']);

             return back()->with('success', ("Update successfully!"));

         } elseif ($request->input('action') == 'pending') {

             Blog::query()->whereIn('id', $ids)->update(['status'=>'pending']);

             return back()->with('success', ("Move to Pending successfully!"));

         } elseif ($request->input('action') == 'draft') {

             Blog::query()->whereIn('id', $ids)->update(['status'=>'draft']);

             return back()->with('success', ("Move to Draft successfully!"));

         } else {
             return back();
         }
     }





















    public function edittt($id)
    {

        $blog = Blog::find($id);
        if (!$blog) {
            abort(404);
        }

        $auths = Auth::all();
        $categories = BlogCategory::all();
        $tags = Tag::all();

        return view('Blog::admin.create', compact('blog', 'auths', 'categories', 'tags'));
    }

    public function stores(Request $request, $id = '')
    {

        $id = $request->id;

        if ($id) {
            // Update
            $blog = Blog::find($id);
            if (!$blog) {
                abort(404);
            }
        } else {
            // Insert
            $blog = new Blog();

        }

        // Validate
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'auth_id' => 'required|not_in:0',
            'category_id' => 'required|not_in:0',
            'tag_id' => 'required|not_in:0',
            'content' => 'required',
            'banner' => 'required|image',
        ]);


        $keys = [
            'title',
            'subtitle',
            'content',
        ];

        /* $blog->title = $request->input('title');
         $blog->subtitle = $request->input('subtitle');
         $blog->content = $request->input('content');*/

        foreach ($keys as $key) {
            $blog->setAttribute($key, $request->input($key));
        }

        $blog->auth_id = $request->input('auth_id');
        $blog->category_id = $request->input('category_id');

        $image = $request->file('banner');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('banner')->storeAs('public/uploads/blog/banners', $image_name);
        $blog->banner = $image_name;

        $blog->save();

        $tag_id = $request->input('tag_id');
        $blog->tags()->sync($tag_id);


        if ($id) {
            return back()->with('update', ("Update successfully!"));
        } else {
            return back()->with('create', ("Create successfully!"));
        }
    }


    // public function delete($id)
    // {
    //     Blog::query()->find($id)->delete();
    //     BlogTag::query()->where('blog_id', $id)->delete();

    //     return redirect()->route('admin.blog.index');
    // }
}

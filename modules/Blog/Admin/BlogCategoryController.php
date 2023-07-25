<?php


namespace Modules\Blog\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Modules\Blog\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    /* Category */
    public function category(Request $request)
    {
        if ($search = $request->input('s'))
        {
            $categories = BlogCategory::query()->where('name','like','%'.$search.'%')->orWhere('slug','like','%'.$search.'%')->get();
        } else {
            $categories = BlogCategory::all();
        }

        return view('Blog::admin.category', compact('categories'));
    }

    public function category_store(Request $request)
    {
        $category = new BlogCategory();

        $request->validate([
            'name'=>[
                'required',
                Rule::unique('blog_categories', 'name'),
            ],
            'parent_id'=>[
                'required',
                'not_in:0',
            ],
            'slug'=>[
                'required',
                Rule::unique('blog_categories', 'slug'),
            ],
        ]);

        $keys = [
            'name',
            'parent_id',
            'slug',
        ];

        foreach ($keys as $key) {
            $category->setAttribute($key, $request->input($key));
        }

        $category->save();

        return back()->with('success', __("Create successfully!"));
    }

    public function category_edit($id)
    {
        $categories = BlogCategory::all();
        $category = BlogCategory::query()->find($id);

        return view('Blog::admin.category_edit', compact('category','categories'));
    }

    public function category_edit_post(Request $request, $id = '')
    {
        $category = BlogCategory::query()->find($id);
/*
        $request->validate([
            'name'=>[
                'required',
                Rule::unique('blog_categories', 'name'),
            ],
            'parent_id'=>[
                'required',
                'not_in:0'
            ],
            'slug'=>[
                'required',
                Rule::unique('blog_categories', 'slug'),
            ],
        ]);*/

        $keys = [
            'name',
            'parent_id',
            'slug',
        ];

        foreach ($keys as $key) {
            $category->setAttribute($key, $request->input($key));
        }

        $category->save();

        return back()->with('success', ("Update successfully!"));
    }

    public function category_delete(Request $request)
    {
        $ids = $request->ids;

        BlogCategory::query()->whereIn('id', $ids)->delete();

        return back()->with('success', ("Delete successfully!"));
    }
}

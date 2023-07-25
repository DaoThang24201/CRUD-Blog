<?php


namespace Modules\Blog\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Modules\Blog\Models\Tag;

class BlogTagController extends Controller
{
    /* Tag */
    public function tag(Request $request)
    {
        if ($search = $request->input('s'))
        {
            $tags = Tag::query()->where('name', 'like', '%'.$search.'%')->orWhere('slug', 'like', '%'.$search.'%')->get();
        } else {
            $tags = Tag::all();
        }

        return view('Blog::admin.tag', compact('tags'));
    }

    public function tag_store(Request $request)
    {

        $tag = new Tag();

        $request->validate([
            'name'=>[
                'required',
                Rule::unique('tags','name')
            ],
            'slug'=>[
                'required',
                Rule::unique('tags','slug')
            ],
        ]);

        $keys = [
            'name',
            'slug',
        ];

        foreach ($keys as $key) {
            $tag->setAttribute($key, $request->input($key));
        }
        $tag->save();

        return back()->with('success', ("Create successfully!"));
    }

    public function tag_edit($id)
    {
        $tag = Tag::query()->find($id);

        return view('Blog::admin.tag_edit', compact('tag'));
    }

    public function tag_edit_post(Request $request, $id = '')
    {
        $tag = Tag::query()->find($id);

        $request->validate([
            'name'=>[
                'required',
                Rule::unique('tags','name')
            ],
            'slug'=>[
                'required',
                Rule::unique('tags','slug')
            ],
        ]);

        $keys = [
            'name',
            'slug',
        ];

        foreach ($keys as $key) {
            $tag->setAttribute($key, $request->input($key));
        }
        $tag->save();

        return redirect()->back()->with('success', ("Update successfully!"));
    }

    public function tag_delete(Request $request)
    {
        $ids = $request->ids;

        Tag::query()->whereIn('id', $ids)->delete();

        return redirect()->back()->with('success', ("Delete successfully!"));
    }
}

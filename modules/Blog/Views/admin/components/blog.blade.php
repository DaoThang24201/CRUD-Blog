
<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Subtitle</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>
            <th scope="col">Tag</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($blogs as $blog)
            <tbody>
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->title}}</td>
                <td>{{$blog->subtitle}}</td>
                <td>{{$blog->content}}</td>
                <td><img class="w-75" src="/storage/uploads/blog/banners/{{$blog->banner}}" alt=""></td>
                <td>{{$blog->auth->name}}</td>
                <td>{{$blog->category->name}}</td>
                <td>
                    @foreach($blog->tags as $tag)
                        {{$tag->name}}
                    @endforeach
                </td>
                <td>{{$blog->slug}}</td>
                <td>
                    <div class="row x-gap-10 y-gap-10 items-center">

                        <div class="col-auto pt-2">
                            <form action="">
                                <button type="button" class="button btn btn-info text-white">Read</button>
                            </form>
                        </div>

                        <div class="col-auto pt-2">
                            <form action="{{route('admin.blog.edit',$blog)}}" method="get">
                                <button type="submit" class="button btn btn-secondary">Update</button>
                            </form>
                        </div>

                        <div class="col-auto pt-2">
                            <form action="{{route('admin.blog.delete',$blog)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="button btn btn-danger">Delete</button>
                            </form>
                        </div>

                    </div>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>

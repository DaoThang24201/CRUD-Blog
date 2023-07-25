


<div class="sidebar__item">
    <h5 class="text-18 fw-500 mb-10">Recent Posts</h5>

    <div class="row y-gap-20 pt-10">

        @foreach($recent_posts as $recent_post)
        <div class="col-12">
            <a href="{{route('blog.detail',['slug'=>$recent_post['slug']])}}" class="d-flex items-center">
                <img class="size-65 rounded-8" src="/storage/uploads/blog/banners/{{$recent_post->banner}}" alt="image">
                <div class="ml-15">
                    <h5 class="text-15 lh-15 fw-500">{{$recent_post->title}}</h5>
                    <div class="text-13 lh-1 mt-5">{{date('M d, Y', strtoTime($recent_post->created_at))}}</div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>

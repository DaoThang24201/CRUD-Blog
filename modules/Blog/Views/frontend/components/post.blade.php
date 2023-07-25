

<div class="col-xl-8">
    <div class="row y-gap-30">

        @foreach($blogs as $blog)
        <a href="{{route('blog.detail',['slug'=>$blog['slug']])}}" class="blogCard -type-1 col-12">
            <div class="row y-gap-15 items-center md:justify-center md:text-center">
                <div class="col-auto">
                    <div class="blogCard__image rounded-4">
                        <div class="ratio ratio-1:1 w-250">
                            <img src="/storage/uploads/blog/banners/{{$blog->banner}}" alt="image" class="img-ratio rounded-4">
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="text-15 text-light-1">{{date('M d, Y', strtoTime($blog->created_at))}}</div>

                    <h3 class="text-22 text-dark-1 mt-10 md:mt-5">
                        {{$blog->title}}
                    </h3>

                    <div class="text-15 lh-16 text-light-1 mt-10 md:mt-5">{{$blog->subtitle}} </div>
                </div>
            </div>
        </a>
        @endforeach

    </div>

    {{$blogs->links()}}
</div>

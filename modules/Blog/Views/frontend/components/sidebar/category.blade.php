

<div class="sidebar__item">
    <h5 class="text-18 fw-500 mb-10">Categories</h5>

    <div class="y-gap-5">

        @foreach($categories as $category)
        <a class="d-flex items-center justify-between text-dark-1" href="blog?category_id={{$category->id}}">
            <span class="text-15 text-dark-1">{{$category->name}}</span>
            <span class="text-14 text-light-1">{{$category->qty}}</span>
        </a>
        @endforeach

    </div>
</div>

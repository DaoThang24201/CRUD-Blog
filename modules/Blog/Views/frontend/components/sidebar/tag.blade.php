


<div class="sidebar__item">
    <h5 class="text-18 fw-500 mb-10">Tags</h5>

    <div class="row x-gap-10 y-gap-10 pt-10">

        @foreach($tags as $tag)
        <div class="col-auto">
            <a href="blog/{{$tag->name}}" class="button -blue-1 py-5 px-20 bg-blue-1-05 rounded-100 text-15 fw-500 text-blue-1">{{$tag->name}}</a>
        </div>
        @endforeach

    </div>
</div>

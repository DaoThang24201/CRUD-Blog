@extends('layout.blog')

@section('body')

    @include('Blog::frontend.components.breadcrumb')

    @include('Blog::frontend.components.title')

    <section data-anim="slide-up delay-2" class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30 justify-between">

                @include('Blog::frontend.components.post')

                <div class="col-xl-3">
                    <div data="slide-up delay-3" class="sidebar -blog">

                        @include('Blog::frontend.components.sidebar.search')

                        @include('Blog::frontend.components.sidebar.category')

                        @include('Blog::frontend.components.sidebar.recent_post')

                        @include('Blog::frontend.components.sidebar.tag')

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

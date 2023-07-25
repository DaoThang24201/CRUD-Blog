@extends('layout.dashboard')

@section('body')


    <div class="main-content">
        <nav class="main-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i> Dashboard</a></li>

                <li class="breadcrumb-item ">
                    <a href="">Blogs</a>
                </li>
                <li class="breadcrumb-item active">
                    Add Blogs
                </li>

            </ol>
        </nav>

        @include('Core::alert.success')

        <form action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data" class="dungdt-form">
            <div class="container-fluid">
                <div class="d-flex justify-content-between mb20">
                    <div class="">
                        <h1 class="title-bar">Add New Blog</h1>

                    </div>

                </div>
                <div class="lang-content-box">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="panel">
                                <div class="panel-title"><strong>Blogs content</strong></div>
                                <div class="panel-body">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" value="{{old('title', $blog->title ?? '')}}" placeholder="Blog title" name="title"
                                               class="form-control">
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Subtitle</label>
                                        <input type="text" value="{{old('subtitle', $blog->subtitle ?? '')}}" placeholder="Blog subtitle" name="subtitle"
                                               class="form-control">
                                        @if ($errors->has('subtitle'))
                                            <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Content </label>
                                        <div class="form-control">

                                            <textarea name="content" class="form-control editor">
                                                {{old('content', $blog->content ?? '')}}
                                            </textarea>
                                            @if ($errors->has('content'))
                                                <span class="text-danger">{{ $errors->first('content') }}</span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="panel">
                                <div class="panel-title"><strong>Publish</strong></div>
                                <div class="panel-body">
                                    <div>
                                        <label>
                                            <input checked="" type="radio" name="status" value="publish"> Publish
                                        </label>
                                    </div>
                                    <div>
                                        <label>
                                            <input type="radio" name="status" value="draft"> Draft
                                        </label>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-save"></i>
                                            Save Changes
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="panel" data-select2-id="4">
                                <div class="panel-title"><strong>Author Setting</strong></div>
                                {{--<div class="panel-body">
                                    <div class="form-group" data-select2-id="3">
                                        <select id="select_author_id" class="form-control dungdt-select2-field select2-hidden-accessible"
                                                data-options="{&quot;ajax&quot;:{&quot;url&quot;:&quot;https:\/\/sandbox.bookingcore.co\/admin\/module\/user\/getForSelect2&quot;,&quot;dataType&quot;:&quot;json&quot;},&quot;allowClear&quot;:true,&quot;placeholder&quot;:&quot;-- Select User --&quot;}"
                                                name="author_id" data-select2-id="select_author_id" tabindex="-1" aria-hidden="true">
                                        </select>
                                        <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 242.3px;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-select_author_id-container">
                                                    <span class="select2-selection__rendered" id="select2-select_author_id-container" role="textbox" aria-readonly="true">
                                                        <span class="select2-selection__placeholder">-- Select User --</span>
                                                    </span>
                                                    <span class="select2-selection__arrow" role="presentation">
                                                        <b role="presentation"></b>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>--}}
                            </div>

                            <div class="panel">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Category </label>
                                        <select name="category_id" class="form-control">
                                            <option value="">-- Please Select --</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if(!empty($blog) ? $blog->category_id == $category->id : '') selected @endif>
                                                    {{$category->name ?? '' }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"> Tag</label>
                                        <select class="tags form-control" id="tags" name="tags[]" multiple="multiple">
                                            @if(!empty($blog))
                                                @foreach($blog->tags as $tag)
                                                    <option value="{{ $tag }}" selected="selected">{{ $tag->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="panel-body-title"> Feature Image</h3>
                                    <div class="form-group">
                                        <input class="form-control" name="banner" value="" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>


@endsection

@push('scripts')

    {{--<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".tags").select2(
                {
                    tags: true,
                    placeholder: 'Chọn hoặc thêm mới'
                }
            );
        });
    </script>--}}

    <script>
        $(document).ready(function() {
            $('.tags').select2({
                placeholder:'Enter tag',
                tags: true,
            });

            $("#tags").select2({
                ajax:{
                    url:"{{route('admin.blog.get_tag')}}",
                    type:"post",
                    dataType:'json',
                    data: function (params) {
                        return {
                            name:params.term,
                            "_token":"{{csrf_token()}}",
                        };
                    },
                    processResults:function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    id: item.id,
                                    text:item.name,
                                }
                            })
                        }
                    },
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            tinymce.init({
                selector: 'textarea.editor',
                height: 300,
                plugins: [
                    'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'code', 'fullscreen', 'insertdatetime', 'media',
                    'table', 'emoticons', 'template', 'help'
                ],
                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
                    'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                    'forecolor backcolor emoticons | help',
                menu: {
                    favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
                },
                menubar: 'favs file edit view insert format tools table help',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        });
    </script>

@endpush

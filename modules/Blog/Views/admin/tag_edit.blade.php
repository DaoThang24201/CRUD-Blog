@extends('layout.dashboard')

@section('body')

    <div class="main-content">
        <form action="{{route('admin.blog.tag_edit_post',$tag)}}" method="post">
            @csrf
            <div class="container">
                <div class="lang-content-box">
                    <div class="row">
                        <div class="col-md-9">

                            @include('Core::alert.success')

                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="panel-body-title"> Tag Content</h3>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" value="{{old('name',$tag->name ?? '')}}"
                                               placeholder=" Tag name" name="name"
                                               class="form-control">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" value="{{old('slug',$tag->slug ?? '')}}"
                                               placeholder=" Tag Slug" name="slug"
                                               class="form-control">
                                        @if ($errors->has('slug'))
                                            <span class="text-danger">{{ $errors->first('slug') }}</span>
                                        @endif
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel">
                                <div class="panel-title"><strong>Publish</strong></div>
                                <div class="panel-body">
                                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save Change </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection

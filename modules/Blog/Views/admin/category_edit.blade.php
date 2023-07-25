@extends('layout.dashboard')

@section('body')

    <div class="main-content">
        <form action="{{route('admin.blog.category_edit_post', $category)}}" method="post">
            @csrf
            <div class="container">
                <div class="lang-content-box">
                    <div class="row">
                        <div class="col-md-9">

                            @include('Core::alert.success')

                            <div class="panel">
                                <div class="panel-body">
                                    <h3 class="panel-body-title"> Category Content</h3>
                                    <div class="form-group">
                                        <label> Name</label>
                                        <input type="text" value="{{old('name',$category->name) ?? ''}}" placeholder="Category name"
                                               name="name" class="form-control">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label> Parent</label>
                                        <select name="parent_id" class="form-control">
                                            <option> -- Please Select --</option>
                                            @foreach($categories as $item)

                                                <option value="{{old('parent_id', $item->parent_id ?? '')}}"
                                                        @if(!empty($category) ? $category->parent_id == $item->id : '') selected @endif>
                                                    {{$item->name}}
                                                </option>

                                                @if ($errors->has('parent_id'))
                                                    <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                                @endif

                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label> Slug</label>
                                        <input type="text" value="{{old('slug',$category->slug ?? '')}}" placeholder="Category slug" name="slug"
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
                                    <div class="form-group">
                                        <div>
                                            <label><input checked="" type="radio" name="status" value="publish"> Publish
                                            </label>
                                        </div>
                                        <div>
                                            <label><input type="radio" name="status" value="draft"> Draft
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> Save Change
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>

@endsection

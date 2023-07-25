@extends('layout.dashboard')

@section('body')

    <div class="main-content">
        <nav class="main-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i>
                        Dashboard</a></li>

                <li class="breadcrumb-item ">
                    <a href="{{route('admin.blog.index')}}">Blogs</a>
                </li>
                <li class="breadcrumb-item active">
                    Tag
                </li>

            </ol>
        </nav>

        @include('Core::alert.success')

        <div class="container-fluid">
            <div class="d-flex justify-content-between mb20">
                <h1 class="title-bar">Blogs Tags </h1>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-title">Add Tag</div>
                        <div class="panel-body">
                            <form action="{{route('admin.blog.tag_store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="{{old('name', $tag->name ?? '')}}" placeholder=" Tag name" name="name"
                                           class="form-control">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" value="{{old('slug', $tag->slug ?? '')}}" placeholder=" Tag Slug" name="slug"
                                           class="form-control">
                                    @if ($errors->has('slug'))
                                        <span class="text-danger">{{ $errors->first('slug') }}</span>
                                    @endif
                                </div>
                                <div class="">
                                    <button class="btn btn-primary" type="submit"> Add new</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="filter-div d-flex justify-content-between ">
                        <div class="col-left">
                            <form method="post" action="{{route('admin.blog.tag_delete')}}"
                                  class="filter-form filter-form-left d-flex justify-content-start">
                                @csrf
                                <select name="action" class="form-control">
                                    <option value=""> Bulk Action</option>
                                    <option value="delete"> Delete</option>
                                </select>
                                <button data-confirm="Do you want to delete?"
                                        class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">Apply
                                </button>
                            </form>
                        </div>
                        <div class="col-left">
                            <form method="get" action=""
                                  class="filter-form filter-form-right d-flex justify-content-end" role="search">
                                <input placeholder="Search keyword ..." type="text" name="s" value="{{request('s')}}"
                                       class="form-control">
                                <button class="btn-info btn btn-icon btn_search" id="search-submit" type="submit">Search
                                    Tag
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-right">
                        <p><i>Found {{count($tags)}} items</i></p>
                    </div>
                    <div class="panel">
                        <form action="{{route('admin.blog.tag_delete')}}" method="post" class="bravo-form-item">
                            @csrf
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th width="60px"><input type="checkbox" class="check-all"></th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    @foreach($tags as $tag)
                                        <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check-item" name="ids[]"
                                                       value="{{$tag->id}}">
                                            </td>
                                            <td class="title">
                                                <a href="{{route('admin.blog.tag_edit',$tag)}}">{{$tag->name}}</a>
                                            </td>
                                            <td>{{$tag->slug}}</td>
                                            <td>{{date('d/m/Y', strtoTime($tag->created_at))}}</td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection


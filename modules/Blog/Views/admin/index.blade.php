{{--<form method="post" action="{{route('blog.admin.store')}}">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <input type="text" name="name" value="{{old('name',$row->name ?? '')}}">
    @csrf
    <button>Save</button>
</form>--}}
@extends('layout.dashboard')

@section('body')


    <div class="main-content">
        <nav class="main-breadcrumb" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class='fa fa-home'></i>
                        Dashboard</a></li>

                <li class="breadcrumb-item ">
                    <a href="">Blogs</a>
                </li>
                <li class="breadcrumb-item active">
                    All
                </li>

            </ol>
        </nav>

        @include('Core::alert.success')

        <div class="container-fluid">
            <div class="d-flex justify-content-between mb20">
                <h1 class="title-bar">All blogs</h1>
                <div class="title-actions">
                    <a href="{{route('admin.blog.create')}}" class="btn btn-primary">Add New Blog</a>
                </div>
            </div>
            <div class="filter-div d-flex justify-content-between ">
                <div class="col-left">
                    <form method="post" action="{{route('admin.blog.action')}}" class="filter-form filter-form-left d-flex justify-content-start">
                        @csrf
                        <select name="action" class="form-control">
                            <option value=""> Bulk Actions</option>
                            <option value="publish"> Publish</option>
                            <option value="pending"> Move to Pending</option>
                            <option value="draft"> Move to Draft</option>
                            <option value="delete"> Delete</option>
                        </select>
                        <button data-confirm="Do you want to delete?"
                                class="btn-info btn btn-icon dungdt-apply-form-btn" type="button">Apply
                        </button>
                    </form>
                </div>
                <div class="col-left">
                    <form method="get" action=""
                          class="filter-form filter-form-right d-flex justify-content-end flex-column flex-sm-row"
                          role="search">
                        <input type="text" name="s" value="{{request('s')}}" placeholder="Search keyword ..."
                               class="form-control">
                        <select name="cate_id" class="form-control">
                            <option value="" >--All Category --</option>
                            @foreach($categories as $category)
                                <option value='{{$category->id}}' @if(request('cate_id') == $category->id) selected @endif>
                                    {{$category->name}}
                                </option>
                            @endforeach
                        </select>
                        <button class="btn-info btn btn-icon btn_search" type="submit">Search Blogs</button>
                    </form>
                </div>
            </div>


            <div class="text-right">
                <p><i>Found {{count($blogs)}} items</i></p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <form action="" class="bravo-form-item">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th width="60px"><input type="checkbox" class="check-all"></th>
                                            <th class="title"> Title</th>
                                            <th class="title"> Subtitle</th>
                                            <th width="200px"> Category</th>
                                            <th width="130px"> Author</th>
                                            <th width="100px"> Date</th>
                                            <th width="100px">Status</th>
                                            <th width="100px"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blogs as $blog)
                                        <tr>
                                            <td>
                                                <input type="checkbox" class="check-item" name="ids[]" value="{{$blog->id}}">
                                            </td>
                                            <td class="title">
                                                <a href="{{route('admin.blog.edit', $blog)}}">{{$blog->title}}</a>
                                            </td>
                                            <td>
                                                {{$blog->subtitle}}
                                            </td>
                                            <td>{{$blog->category->name}}</td>
                                            <td>
                                                System Admin
                                            </td>
                                            <td> {{date('d/m/Y', strtoTime($blog->created_at))}}</td>
                                            <td><span class="badge badge-{{$blog->statusAll()}}">{{$blog->status}}</span></td>
                                            <td>
                                                <a href="{{route('admin.blog.edit', $blog)}}"
                                                   class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

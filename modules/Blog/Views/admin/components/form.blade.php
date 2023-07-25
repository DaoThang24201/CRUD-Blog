



    @csrf
    <input type="hidden" name="id" value="{{!empty($blog) ? $blog->id : ''}}"/>
    <div class="mb-3">
        <label class="form-label">Blog Title</label>
        <input type="text" name="title" value="{{old('title',$blog->title ?? '')}}" class="form-control">

        @if ($errors->has('title'))
            <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Blog Subtitle</label>
        <input type="text" name="subtitle" value="{{old('subtitle',$blog->subtitle ?? '')}}" class="form-control">

        @if ($errors->has('subtitle'))
            <span class="text-danger">{{ $errors->first('subtitle') }}</span>
        @endif
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="auth_id">
            <option>Author</option>
            @foreach($auths as $auth)
                <option value="{{ $auth->id }}" @if(!empty($blog) ? $blog->auth_id == $auth->id : '') selected @endif>
                    {{ $auth->name ?? '' }}
                </option>

                @if ($errors->has('auth_id'))
                    <span class="text-danger">{{ $errors->first('auth_id') }}</span>
                @endif
            @endforeach
        </select>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="category_id">
            <option>Category</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}" @if(!empty($blog) ? $blog->category_id == $category->id : '') selected @endif>
                    {{$category->name ?? ''}}
                </option>
            @endforeach
        </select>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <div class="text-25 fw-500">Tag</div>
        </div>

        @php
            $_checked = old('tag_id',isset($blog) ? $blog->tags->pluck('id')->toArray() ?? [] : []);
        @endphp

        @foreach($tags as $tag)
            <div class="col-lg-6 col-sm-4">
                <div class="row y-gap-15">
                    <div class="col-12">

                        <div class="d-flex items-center mt-2">
                            <div class="form-checkbox">
                                <input type="checkbox" name="tag_id[]" value="{{$tag->id}}" @if(in_array($tag->id, $_checked)) checked @endif >
                                <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                </div>
                            </div>
                            <div class="text-15 lh-11 ml-10">{{$tag->name}}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea class="form-control" name="content" rows="4">{{old('content',$blog->content ?? '')}}</textarea>

        @if ($errors->has('content'))
            <span class="text-danger">{{ $errors->first('content') }}</span>
        @endif
    </div>

    <div class="mb-5">
        <label for="formFile" class="form-label">Banner</label>
        <input class="form-control" name="banner" value="" type="file" id="formFile">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
    <button type="submit" class="btn btn-primary">Save</button>

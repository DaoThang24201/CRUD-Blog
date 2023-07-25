


    @csrf
    <input type="hidden" name="id" value="{{!empty($hotel) ? $hotel->id : ''}}">

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" value="{{old('title',$hotel->title ?? '')}}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Type</label>
        <input type="text" name="type" value="{{old('type',$hotel->type ?? '')}}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" name="city" value="{{old('city',$hotel->city ?? '')}}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Region</label>
        <input type="text" name="region" value="{{old('region',$hotel->region ?? '')}}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" name="price" value="{{old('price',$hotel->price ?? '')}}" class="form-control">
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="deal_id">
            <option>Deal</option>
            @foreach($deals as $deal)
                <option value="{{old('deal_id', $deal->id ?? '')}}" @if(!empty($hotel) ? $hotel->deal_id == $deal->id : '') selected @endif>
                    {{ $deal->name ?? '' }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="filter_id">
            <option>Popular Filter</option>
            @foreach($filters as $filter)
                <option value="{{old('filter_id', $filter->id ?? '')}}" @if(!empty($hotel) ? $hotel->filter_id == $filter->id : '') selected @endif>
                    {{ $filter->name ?? '' }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="amenity_id">
            <option>Amenity</option>
            @foreach($amenities as $amenity)
                <option value="{{old('amenity_id', $amenity->id ?? '')}}" @if(!empty($hotel) ? $hotel->amenity_id == $amenity->id : '') selected @endif>
                    {{ $amenity->name ?? '' }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="style_id">
            <option>Style</option>
            @foreach($styles as $style)
                <option value="{{old('style_id', $style->id ?? '')}}" @if(!empty($hotel) ? $hotel->style_id == $style->id : '') selected @endif>
                    {{ $style->name ?? '' }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="neighbor_id">
            <option>Neighborhood</option>
            @foreach($neighbors as $neighbor)
                <option value="{{old('neighbor_id', $neighbor->id ?? '')}}" @if(!empty($hotel) ? $hotel->neighbor_id == $neighbor->id : '') selected @endif>
                    {{ $neighbor->name ?? '' }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <div class="text-25 fw-500">Service</div>
        </div>

        @php
            $_checked = old('service_id', isset($hotel) ? $hotel->services->pluck('id')->toArray() ?? [] : []);
        @endphp

        @foreach($services as $service)
            <div class="col-lg-6 col-sm-4">
                <div class="row y-gap-15">
                    <div class="col-12">

                        <div class="d-flex items-center mt-2">
                            <div class="form-checkbox">
                                <input type="checkbox" name="service_id[]" value="{{$service->id}}" @if(in_array($service->id, $_checked)) checked @endif>
                                <div class="form-checkbox__mark">
                                    <div class="form-checkbox__icon icon-check"></div>
                                </div>
                            </div>
                            <div class="text-15 lh-11 mr-10">{{$service->name}}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mb-5">
        <label for="formFile" class="form-label">Banner</label>
        <input class="form-control" name="banner" value="{{old('banner',$hotel->banner ?? '')}}" type="file" id="formFile">
        <img class="w-25" src="/storage/uploads/hotel/banners/{{$hotel->banner ?? ''}}" alt="">
    </div>



    <button type="submit" class="btn btn-primary">Create</button>
    <button type="submit" class="btn btn-primary">Save</button>

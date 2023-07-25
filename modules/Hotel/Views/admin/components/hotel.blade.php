


<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <thead>
        <tr class="w-100">
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Banner</th>
            <th scope="col">Deal</th>
            <th scope="col">Popular Filter</th>
            <th scope="col">Amenity</th>
            <th scope="col">Style</th>
            <th scope="col">Neighborhood</th>
            <th scope="col">Service</th>
            <th scope="col">Type</th>
            <th scope="col">City</th>
            <th scope="col">Region</th>
            <th scope="col">Price</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach($hotels as $hotel)
            <tbody>
            <tr>
                <td>{{$hotel->id}}</td>
                <td>{{$hotel->title}}</td>
                <td><img class="w-75" src="/storage/uploads/hotel/banners/{{$hotel->banner}}" alt=""></td>
                <td>{{$hotel->deal->name}}</td>
                <td>{{$hotel->filter->name}}</td>
                <td>{{$hotel->amenity->name}}</td>
                <td>{{$hotel->style->name}}</td>
                <td>{{$hotel->neighbor->name}}</td>
                <td>
                    @foreach($hotel->services as $service)
                        {{$service->name}}
                    @endforeach
                </td>
                <td>{{$hotel->type}}</td>
                <td>{{$hotel->city}}</td>
                <td>{{$hotel->region}}</td>
                <td>{{$hotel->price}}</td>
                <td>{{$hotel->slug}}</td>
                <td>
                    <div class="row x-gap-10 y-gap-10 items-center">

                        <div class="col-auto pt-2">
                            <form action="">
                                <button type="button" class="button btn btn-info text-white">Read</button>
                            </form>
                        </div>

                        <div class="col-auto pt-2">
                            <form action="{{route('admin.hotel.edit',$hotel)}}" method="get">
                                <button type="submit" class="button btn btn-secondary">Update</button>
                            </form>
                        </div>

                        <div class="col-auto pt-2">
                            <form action="{{route('admin.hotel.delete',$hotel)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="button btn btn-danger">Delete</button>
                            </form>
                        </div>

                    </div>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
</div>

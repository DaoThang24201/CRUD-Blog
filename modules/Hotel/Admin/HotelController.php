<?php

namespace Modules\Hotel\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Hotel\Models\Hotel;
use Modules\Hotel\Models\HotelAmenity;
use Modules\Hotel\Models\HotelDeal;
use Modules\Hotel\Models\HotelFilter;
use Modules\Hotel\Models\HotelNeighbor;
use Modules\Hotel\Models\HotelService;
use Modules\Hotel\Models\HotelStyle;
use Modules\Hotel\Models\Service;

class HotelController extends Controller
{
    public function index()
    {


        return view('Hotel::admin.index');
    }

    public function create()
    {
        return view('Hotel::admin.create');
    }

    public function attribute()
    {
        return view('Hotel::admin.attribute');
    }

    public function recovery()
    {
        return view('Hotel::admin.recovery');
    }

    public function room()
    {
        return view('Hotel::admin.room');
    }

    public function room_edit($id)
    {
        return view('Hotel::admin.room_edit');
    }



















    public function createsss(){

        $deals = HotelDeal::all();
        $filters = HotelFilter::all();
        $amenities = HotelAmenity::all();
        $styles = HotelStyle::all();
        $neighbors = HotelNeighbor::all();
        $services = Service::all();

        return view('Hotel::admin.create',compact('deals','filters','amenities','styles','neighbors','services'));
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        if(!$hotel) abort(404);

        $deals = HotelDeal::all();
        $filters = HotelFilter::all();
        $amenities = HotelAmenity::all();
        $styles = HotelStyle::all();
        $neighbors = HotelNeighbor::all();
        $services = Service::all();

        return view('Hotel::admin.create',compact('hotel','deals','filters','amenities','styles','neighbors','services'));
    }

    public function store(Request $request, $id = '')
    {
        $id = $request->id;
        if ($id) {
            //Update
            $hotel = Hotel::find($id);
            if (!$hotel) abort(404);
        } else {
            //Insert
            $hotel = new Hotel();
        }

        //Validate
        $request->validate([
            'title'=>'required',
            'type'=>'required',
            'city'=>'required',
            'region'=>'required',
            'price'=>'required|alpha_num',
            'deal_id'=>'required|not_in:0',
            'filter_id'=>'required|not_in:0',
            'amenity_id'=>'required|not_in:0',
            'style_id'=>'required|not_in:0',
            'neighbor_id'=>'required|not_in:0',
            'service_id'=>'required|not_in:0',
            'banner'=>'required|image',
        ], $request->input());

        $keys = [
            'title',
            'type',
            'city',
            'region',
            'price',
        ];
        foreach ($keys as $key) {
            $hotel->setAttribute($key, $request->input($key));
        }

        $hotel->deal_id = $request->input('deal_id');
        $hotel->filter_id = $request->input('filter_id');
        $hotel->amenity_id = $request->input('amenity_id');
        $hotel->style_id = $request->input('style_id');
        $hotel->neighbor_id = $request->input('neighbor_id');

        $image = $request->file('banner');
        $image_name = $image->getClientOriginalName();
        $path = $request->file('banner')->storeAs('public/uploads/hotel/banners', $image_name);
        $hotel->banner = $image_name;

        $hotel->save();

        $service_id = $request->input('service_id');
        $hotel->services()->sync($service_id);

        if ($id) {
            return redirect()->route('admin.hotel.index')->with('success',__("Saved"));
        } else {
            return redirect()->route('admin.hotel.index')->with('success',__("Created"));
        }
    }

    public function delete($id)
    {
        Hotel::query()->find($id)->delete();
        HotelService::query()->where('hotel_id', $id)->delete();

        return redirect()->route('admin.hotel.index');
    }
}

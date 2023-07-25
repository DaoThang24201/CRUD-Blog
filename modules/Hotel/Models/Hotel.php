<?php

namespace Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    public function deal() {
        return $this->belongsTo(HotelDeal::class,'deal_id');
    }

    public function filter() {
        return $this->belongsTo(HotelFilter::class,'filter_id');
    }

    public function amenity() {
        return $this->belongsTo(HotelAmenity::class,'amenity_id');
    }

    public function style() {
        return $this->belongsTo(HotelStyle::class,'style_id');
    }

    public function neighbor() {
        return $this->belongsTo(HotelNeighbor::class,'neighbor_id');
    }

    public function services() {
        return $this->belongsToMany(Service::class, HotelService::class, 'hotel_id', 'service_id');
    }
}

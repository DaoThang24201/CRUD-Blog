<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    public function blogs() {
        return $this->belongsToMany(Blog::class,BlogTag::class,'blog_id','tag_id');
    }
}

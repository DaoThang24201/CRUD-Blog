<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
      'title',
      'subtitle',
      'content',
    ];

    public function auth() {
        return $this->belongsTo(Auth::class,'auth_id');
    }

    public function category() {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }

    public function blogImages() {
        return $this->hasOne(BlogImage::class,'blog_id');
    }

    public function blogComments() {
        return $this->hasMany(BlogComment::class,'blog_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, BlogTag::class,'blog_id','tag_id');
    }



    public function statusAll() {
        if ($this->status == 'publish') {
            return 'publish';
        } elseif ($this->status == 'pending') {
            return 'pending';
        } elseif ($this->status == 'draft') {
            return 'draft';
        }
    }
}

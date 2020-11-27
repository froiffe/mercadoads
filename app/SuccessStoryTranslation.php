<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuccessStoryTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['slug', 'title', 'description', 'description_list', 'content', 'video_id', 'brand', 'image', 'desktop_banner_image', 'mobile_banner_image', 'is_highlight_list', 'is_highlight_home', 'is_active'];
}

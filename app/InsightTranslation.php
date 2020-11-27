<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsightTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['slug', 'date', 'title', 'description', 'description_list', 'content', 'image', 'desktop_banner_image', 'mobile_banner_image', 'desktop_internal_image', 'mobile_internal_image', 'is_highlight_list', 'is_highlight_home', 'is_active'];
}

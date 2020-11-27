<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class SuccessStory extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['slug', 'title', 'banner_home_title', 'description', 'description_list', 'content', 'video_id', 'brand', 'image', 'desktop_banner_image', 'mobile_banner_image', 'desktop_list_banner_image', 'mobile_list_banner_image', 'is_highlight_list', 'is_highlight_home', 'is_active', 'seo_title', 'seo_description', 'seo_image'];

    public function solutions()
    {
        return $this->belongsToMany('App\Solution', 'success_story_solution', 'success_story_id', 'solution_id');
    }
}

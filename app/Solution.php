<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Solution extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['slug', 'image', 'title', 'subtitle', 'description', 'characteristics_text', 'description_list', 'specs_file', 'image_desktop', 'image_webmobile', 'image_app', 'video_desktop', 'video_webmobile', 'video_app', 'image_default', 'seo_title', 'seo_description', 'seo_image'];

    public function solutionsRelated()
    {
        return $this->belongsToMany('App\Solution', 'solution_related', 'solution_id', 'solution_id_related');
    }

    public function characteristics()
    {
        return $this->belongsToMany('App\Characteristic', 'solution_characteristic', 'solution_id', 'characteristic_id');
    }

    public function types()
    {
        return $this->belongsToMany('App\Type', 'solution_type', 'solution_id', 'type_id');
    }
}

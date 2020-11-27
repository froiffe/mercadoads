<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolutionTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['slug', 'image', 'title', 'description', 'description_list', 'characteristics', 'specs_file', 'image_desktop', 'image_webmobile', 'image_app', 'seo_title', 'seo_description', 'seo_image'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['slug', 'seo_title', 'seo_description', 'seo_image', 'seo_ogtitle', 'seo_ogdescription'];
}

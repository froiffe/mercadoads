<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Page extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['slug', 'seo_title', 'seo_description', 'seo_image', 'seo_ogtitle', 'seo_ogdescription'];
}

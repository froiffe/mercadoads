<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Insight extends Model implements TranslatableContract
{
    use Translatable;
    use SoftDeletes;

    public $translatedAttributes = ['slug', 'date', 'title', 'description', 'subtitle', 'description_list', 'content', 'image', 'image_home', 'desktop_banner_image', 'mobile_banner_image', 'desktop_internal_image', 'mobile_internal_image', 'is_highlight_list', 'is_highlight_home', 'is_active', 'seo_title', 'seo_description', 'seo_image'];

    public function insightsRelated()
    {
        return $this->belongsToMany('App\Insight', 'insight_related', 'insight_id', 'insight_id_related');
    }

    public function formatSize()
    {
        switch ($this->format) {
            case '1/3':
                $formatSize = 'small';
                break;
            case '2/3':
                $formatSize = 'big';
                break;
            case '1/2':
                $formatSize = 'medium';
                break;

            default:
                # code...
                break;
        }

        return $formatSize;
    }
}

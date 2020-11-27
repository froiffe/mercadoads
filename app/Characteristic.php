<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Characteristic extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title', 'description', 'image'];
}

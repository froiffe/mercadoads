<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LandingContact extends Model
{
    use SoftDeletes;

    public $dates = ['created_at', 'updated_at'];
}

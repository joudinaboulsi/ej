<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //

    protected $table= "sliders";
    protected $fillable = [
        'title',
        'desc',
        'bg',
        'link',
        'link_href',

    ];
}

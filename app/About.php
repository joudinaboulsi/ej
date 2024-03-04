<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //

    protected $table= "abouts";
    protected $fillable = [
        'title',
        'subtitle',
        'text',
        'image',
        'alt',
    ];
}

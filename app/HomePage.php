<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    //

    protected $table = "home_pages";
    protected $fillable=[
        'title_service',
        'title_project',
        'title_review',
        'title_team',
        'title_comp1',
        'href_comp1',
        'title_comp2',
        'href_comp2',
        'title_comp3',
        'href_comp3',
       
    ];
}

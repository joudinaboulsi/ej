<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $table ="projects";
    protected $fillable = [
        'name',
        'image',
        'image_url',
        'alt',
    ];


    public function images(){
        return $this->hasMany(Portfolio::class, 'project_id', 'id');
     }
}

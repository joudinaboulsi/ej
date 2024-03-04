<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    protected $table="portfolios";
    protected $fillable = [
        'id',
        'image',
        'project_id',

    ];


    public function project() {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}

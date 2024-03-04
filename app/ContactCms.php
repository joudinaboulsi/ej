<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactCms extends Model
{
    //

    protected $table= "contact_cms";
    protected $fillable = [
        'title',
        'text',
    ];
}

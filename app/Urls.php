<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urls extends Model
{
    protected $fillable = ['link','title', 'description',  'user_id'];

    protected $dates = ['deleted_at'];

    function users() {
        return $this->belongsTo('App\User');
    }
}

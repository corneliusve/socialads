<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $fillable = ['user_id', 'title', 'short_desc', 'desc', 'thumbnail', 'live'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function reaction()
    {
        return $this->hasMany('App\Reactions');
    }
}

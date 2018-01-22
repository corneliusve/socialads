<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactions extends Model
{
    protected $fillable = ['user_id', 'project_id'];

    public function project()
    {
        return $this->belongsTo('App\Projects');
    }
}

<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['user_id', 'group', 'tag'];

    public function user()
    {
        $this->belongsTo('App\User' );
    }
}

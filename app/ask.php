<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ask extends Model
{
    protected $fillable = [
       'question','user_id','from'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

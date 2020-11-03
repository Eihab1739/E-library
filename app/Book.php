<?php

namespace App;
use willvincent\Rateable\Rateable;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use Rateable;


    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function ratings() {
        return $this->morphMany(Rating::class, 'rateable')->orderBy('id', 'DESC');
    }
}

<?php

namespace App;
use willvincent\Rateable\Rateable;


use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use Rateable;
/**
     * Get all of the owning commentable models.
     */

    public function rateable() {
        return $this->morphTo();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rateable_id', 'rateable_type', 'rating', 'user_id',
    ];
}

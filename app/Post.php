<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'tours';
    public $primaryKey = 'tour_id';

    public function user(){

        return $this->belongsTo('App\User');
    }
}

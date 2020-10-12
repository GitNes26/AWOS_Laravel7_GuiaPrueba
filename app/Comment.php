<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'id';
    protected $table ='comments';
    public $timestamps = false;
    protected $fillable = ['comment', 'user_id','product_id'];

    public function products(){
        return$this->belongsTo('App\Product');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','desc','category_id','status'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function Tags(){
        return $this->belongsToMany(Tag::class,'posts_tags','post_id','tag_id')->withTimeStamps();
    }
}

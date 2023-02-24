<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected static function boot(){
    //     parent::boot();

    //     static::deleted(function($post){
    //         $post->comments()->delete();
    //     });

    // }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

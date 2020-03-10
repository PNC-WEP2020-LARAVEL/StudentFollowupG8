<?php

namespace App;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}

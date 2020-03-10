<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\User;
class Comment extends Model
{
    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}

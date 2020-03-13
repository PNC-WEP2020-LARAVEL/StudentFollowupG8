<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;
use App\User;
class Comment extends Model
{
<<<<<<< HEAD
    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
=======
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function student(){
        return $this->belongsTo('App\Student');
>>>>>>> ff075cae535df21ffcf76f83c2107e2333d8d1f0
    }

}

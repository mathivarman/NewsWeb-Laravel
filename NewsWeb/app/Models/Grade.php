<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public function Students(){
        return $this->hasMany(Student::class);
    }
}

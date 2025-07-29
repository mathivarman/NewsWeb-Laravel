<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    public function Nic(){
        return $this->hasOne(Nic::class);
    }

    public function Grade(){
        return $this->belongsTo(Grade::class);
    }

    public function Subjects(){
        return $this->belongsToMany(Subject::class);
    }
}

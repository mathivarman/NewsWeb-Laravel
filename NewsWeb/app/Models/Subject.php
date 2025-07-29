<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function Students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class);
    }

}

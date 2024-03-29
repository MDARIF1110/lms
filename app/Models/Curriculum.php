<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $table = 'curriculums';

    public function homeworks(){
        return $this->hasMany(Homework::class);
    }

    public function attendances(){
        return $this->hasMany(Attendances::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends = ['courses_count']; 


    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function getCoursesCountAttribute()
    {
        return Course::where('category_id',$this->id)->count();
    }


}

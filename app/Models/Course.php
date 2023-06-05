<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $with = ['comments','attachments','lessons'];
    protected $fillable = [
        'title',
        'image',
        'price',
        'category_id',
        'details',
        'instructor_id',
        'skill_level',
        'language',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function getImageAttribute($value)
    {
        if($value){
            return url('uploads/images/course/'.$value);
        }else{
            return url('uploads/images/course/default.png');
        }
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'job',
        'image',

    ];
    public function getImageAttribute($value)
    {
        if($value){
            return url('uploads/images/instructors/'.$value);
        }else{
            return url('uploads/images/instructors/default.png');
        }
    }

}

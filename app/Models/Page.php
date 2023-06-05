<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'sub_title',
        'des',
        'image',
        'statice1',
        'statice1_title',
        'statice2',
        'statice2_title',
        'statice3',
        'statice3_title',
        'statice4',
        'statice4_title',
    ];
    public function getImageAttribute($value)
    {
        if($value){
            return url('uploads/images/pages/'.$value);
        }else{
            return url('uploads/images/pages/default.png');
        }
    }

}

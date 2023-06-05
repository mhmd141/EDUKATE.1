<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'file',
        'type',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

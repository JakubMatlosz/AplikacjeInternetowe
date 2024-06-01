<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'language', 'teacher_id', 'start_date', 'end_date'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }
}

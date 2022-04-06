<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "school"
    ];

    public function student()
    {
        return $this->hasManyThrough(Student::class, Course::class);
    }
}


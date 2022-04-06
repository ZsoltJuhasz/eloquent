<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        "course",
        "school_id"
    ];

    // public function student() {
    //     return $this->belongsTo(Student::class);
    // }

    public $timestamps = false;
}

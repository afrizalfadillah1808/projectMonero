<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'namaCourse',
    //     'slugCourse',
    //     'lamaVideo',
    //     'jumlahVideo',
    //     'hargaCourse',
    // ];

    protected $guarded = [
        'id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function mentor() {
        return $this->belongsTo(Mentor::class);
    }
}

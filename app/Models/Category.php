<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function getRouteKeyName() {
      return 'slugCategory';
    }
}

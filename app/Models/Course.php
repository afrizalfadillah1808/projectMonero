<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Course extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [
        'id',
    ];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, fn($query, $search) => $query->where('namaCourse', 'like', '%' . $search . '%')->orWhere('deskripsiCourse', 'like', '%' . $search . '%'));

        $query->when($filters['category'] ?? false, fn($query, $category) => $query->whereHas('category', fn($query) => $query->where('slugCategory', $category)));

        $query->when($filters['mentor'] ?? false, fn($query, $mentor) => $query->whereHas('mentor', fn($query) => $query->where('username', $mentor)));
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function mentor() {
        return $this->belongsTo(Mentor::class);
    }

    public function getRouteKeyName() {
        return 'slugCourse';
    }

    public function sluggable(): array {
        return [
            'slugCourse' => [
                'source' => 'namaCourse'
            ]
        ];
    }
}

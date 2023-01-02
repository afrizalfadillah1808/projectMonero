<?php

namespace App\Models;

class Course
{
    private static $classSubjects = [
      [
        'namaKelas' => 'Mastering Laravel and Bootstrap',
        'slugKelas' => 'mastering-laravel-and-bootstrap',
        'lamaVideo' => '20 Jam',
        'jumlahVideo' => '121 Video',
        'hargaKelas' => 'Rp. 999.000',
        'namaMentor' => 'Rizal Fauzi Udin',
      ],
      [
        'namaKelas' => 'Mastering Python and Django',
        'slugKelas' => 'mastering-python-and-django',
        'lamaVideo' => '18 Jam',
        'jumlahVideo' => '98 Video',
        'hargaKelas' => 'Rp. 699.000',
        'namaMentor' => 'Rizal Fauzi Udin',
      ],
    ];

    public static function allClass() {
      return collect(self::$classSubjects);
    }

    public static function findSlug($slugKelas) {
      $classes = static::allClass();
      return $classes->firstWhere('slugKelas', $slugKelas);
    }
}

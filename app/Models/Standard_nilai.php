<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standard_nilai extends Model
{
    use HasFactory;
    protected $table = 'standard_nilai';
    protected $fillable = [
        'id_standar_nilai',
        'id_kelas',
        'nilai_indeks_huruf',
        'indeks',
        'start_nilai',
        'end_nilai'
    ];
}

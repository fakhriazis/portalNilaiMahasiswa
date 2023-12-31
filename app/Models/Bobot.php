<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;

    protected $table = 'bobot';
    protected $primaryKey = 'id_bobot';
    protected $fillable = [
        'id_kelas',
        'id_komponen',
        'bobot'
    ];
}

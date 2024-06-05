<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $table = 'komentar';
    protected $primaryKey = 'id'; 

    protected $fillable = [
        'tanggal', 'username', 'isi_komentar', 'post_id' 
    ];


}

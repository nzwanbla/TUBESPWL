<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;

        protected $table = 'berita'; 
        protected $primaryKey = 'id'; 
        public $timestamps = false;
        
        protected $fillable = [
            'judul_berita',
            'jenis_berita',
            'judul1',
            'isi1',
            'judul2',
            'isi2', 
            'judul3',
            'isi3',
        ];

}

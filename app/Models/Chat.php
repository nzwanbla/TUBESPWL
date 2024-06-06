<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'message',
        'is_admin',
        'created_at'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

}

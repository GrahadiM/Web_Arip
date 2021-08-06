<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentars';
    protected $fillable = 
    [
        // 'user_id',
        'nama',
        'email',
        'subjek',
        'detail',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

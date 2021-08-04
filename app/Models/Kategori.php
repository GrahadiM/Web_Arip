<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $fillable = 
    [
        'nama',
        'slug',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function jenis()
    {
        return $this->belongsTo('App\Models\JenisUploadFile');
    }
}

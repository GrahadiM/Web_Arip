<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topik extends Model
{
    use HasFactory;
    protected $table = 'topiks';
    protected $fillable = ['nama', 'nama_en'];
    public function subtopik()
    {
        return $this->belongsTo('App\Models\SubTopik');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function uploadFile()
    {
        return $this->belongsTo('App\Models\UploadFile');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    use HasFactory;
    protected $table = 'upload_files';
    protected $fillable = 
    [
        'user_id',
        'kategori_id',
        'subtopik_id',
        'status',
        'judul_tesis',
        'judul_tesis_en',
        'topik_tesis',
        'topik_tesis_en',
        'abstrak',
        'lokasi',
        'dosen_pembimbing',
        'file',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
    public function topik()
    {
        return $this->belongsTo('App\Models\Topik');
    }
    public function subtopik()
    {
        return $this->belongsTo('App\Models\SubTopik');
    }
}

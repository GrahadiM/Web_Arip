<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTopik extends Model
{
    use HasFactory;
    protected $table = 'sub_topiks';
    protected $fillable = ['topik_id', 'nama'];
    public function topik()
    {
        return $this->belongsTo('App\Models\Topik');
    }
    public function uploadFile()
    {
        return $this->belongsTo('App\Models\UploadFile');
    }
}

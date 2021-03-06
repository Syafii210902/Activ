<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategori(){
        return $this->belongsTo(KategoriKegiatan::class, 'kategori_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function divisis(){
        return $this->hasMany(DivisiKegiatan::class, 'kegiatan_id');
    }
}

<?php

namespace App\Models;

use App\Models\User;
use App\Models\Favorite;
use App\Models\Likefoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'url',
        'kategori',
        'id_user',
        'id_album',

    ];
    protected $table = 'fotos';
    //relasi nilai balik ke tabel user



    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    //relasi ke tabel likefoto
    public function likefoto()
    {
        return $this->hasMany(Likefoto::class, 'id_foto', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_foto', 'id');
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'id_foto', 'id');
    }

    public function kategories()
    {
        return $this->hasMany(Kategori::class, 'id_foto', 'id');
    }

    public function albums()
    {
        return $this->belongsTo(Album::class, 'id_album', 'id');
    }
}

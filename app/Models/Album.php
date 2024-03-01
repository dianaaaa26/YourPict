<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_album',
        'deskripsion',
        'foto',
        'user_id',

    ];

    protected $table = 'album';

    public function fotos()
    {
        return $this->hasMany(Foto::class, 'id_foto', 'id');
    }
}

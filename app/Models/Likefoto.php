<?php

namespace App\Models;

use App\Models\Foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Likefoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_foto',
    ];
    protected $table = 'likefotos';

    public function hasLiked($userId, $fotoId)
    {
        return $this->where('id_user', $userId)
                    ->where('id_foto', $fotoId)
                    ->exists();
    }

    //relasi nilai balik
    public function foto()
    {
        return $this->belongsTo(Foto::class, 'id_foto', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}

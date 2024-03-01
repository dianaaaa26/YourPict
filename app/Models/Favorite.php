<?php

namespace App\Models;

use App\Models\Foto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_foto',
    ];
    protected $table = 'favorites';



    public function foto(){
        return $this->belongsTo(Foto::class, 'id_user', 'id');
    }
}

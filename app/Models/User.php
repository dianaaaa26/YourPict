<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Foto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'no_telepon',
        'jenis_kelamin',
        'alamat',
        'bio',
        'tgl_lahir',
        'status_user',
        'pictures',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // relasi uaer ke dalam tabel foto
    public function fotos(){
        return $this->hasMany(Foto::class, 'id_foto', 'id');
    }
    
    public function user(){
        return $this->hasMany(Foto::class, 'id_user', 'id');
    }

    public function comments(){
        return $this->hasMany(Foto::class, 'id_user', 'id');
    }

    public function likefoto() {
        return $this->hasMany(Likefoto::class,'id_foto', 'id');
    }
    


}


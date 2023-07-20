<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //Harus dibuat = Tabel, Primary dari Tabel, dan nama kolom
    protected $table = 'user';
    protected $primaryKey = 'nip_user';
    protected $fillable = [
        'nip_user',
        'pic',
        'nama',
        'password',
        'nuptk',
        'golongan',
        'tempat',
        'tanggal_lahir',
        'jabatan',
        'unit_organisasi',
        'alamat_unit_organisasi',
        'lvl'
    ];
    //Penting :'( Kalau tidak ada ini vv nanti return first from table bukan yang loggin (Solving time 3days)
    public $incrementing = false;
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
    ];
}

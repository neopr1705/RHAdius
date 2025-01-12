<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

        // Tentukan nama tabel jika berbeda
        protected $table = 'pengguna'; // Ubah menjadi 'pengguna'
    
    protected $fillable = [
        'nama',       // Ganti 'name' dengan 'nama' sesuai dengan tabel
        'email',      // 'email' digunakan untuk login
        'password',   // 'password' untuk autentikasi
        'foto_profil', // Foto profil untuk pengguna
        'peran',      // Peran seperti 'admin', 'pengguna', atau 'tamu'
    ];

    protected $hidden = [
        'password',   // Menyembunyikan password
        'remember_token', // Menyembunyikan token "remember me"
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Untuk keamanan, password akan disimpan dengan hash
        ];
    }
}

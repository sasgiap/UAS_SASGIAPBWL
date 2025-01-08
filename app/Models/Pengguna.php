<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    
    protected $table = 'tb_pengguna';

    
    protected $primaryKey = 'id_pengguna';

    protected $fillable = [
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($pengguna) {
    
            if ($pengguna->password) {
                $pengguna->password = bcrypt($pengguna->password);
            }
        });

        static::updating(function ($pengguna) {
            
            if ($pengguna->password) {
                $pengguna->password = bcrypt($pengguna->password);
            }
        });
    }
}

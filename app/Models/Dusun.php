<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  // Import HasFactory

class Dusun extends Model
{
    use HasFactory;  // Apply the HasFactory trait

    protected $table = 'tb_dusun';  // Table name

    // Specify the custom primary key if it's not the default 'id'
    protected $primaryKey = 'id_dusun';  // Set this to the actual primary key column name in your database

    // The attributes that are mass assignable
    protected $fillable = ['nama_dusun'];
}

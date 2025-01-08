<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    // Define the table name to match the migration
    protected $table = 'tb_warga'; // Updated to match the migration table name

    // Define the primary key field name
    protected $primaryKey = 'id_warga'; // Updated to match the primary key defined in migration

    // Disable mass assignment protection, but we will specify fillable attributes
    protected $guarded = [];

    // Alternatively, you could use $fillable to specify which attributes can be mass-assigned:
    // protected $fillable = ['nama', 'jenis_kelamin', 'dusun_id'];

    // Define the relationship with the Dusun model
    // Assuming 'dusun_id' is the foreign key in the 'warga' table referencing 'id_dusun' in the 'tb_dusun' table
    public function dusun()
    {
        return $this->belongsTo(Dusun::class, 'dusun_id', 'id_dusun'); // Adjust the related model if necessary
    }

    // Optionally, you can add additional methods or attributes as needed.
}

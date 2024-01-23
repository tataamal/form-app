<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Backup extends Model
{
    protected $table = 'backup';
    protected $primaryKey = 'id_backup';
    protected $fillable = [
        'id_backup','periode','tanggal','objek','pj','keterangan'
    ];
}

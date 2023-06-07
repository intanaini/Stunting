<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class balita extends Model
{
    use HasFactory;
    protected $fillable=[
        'idbalita',
        'nik',
        'nama_balita',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'idortu'
    ];
    protected $primaryKey = 'idbalita';
    protected $dates = ['tanggal_lahir'];

    protected $casts = [
        'idbalita'=> 'string',
        'tanggal_lahir'=>'datetime'
    ];
    protected $keyType = 'string';
 
    public $incrementing = false;

    public function perkembangan()
    {
        return $this->hasMany(perkembangan::class,'idbalita');
    }
    public function ortu()
    {
        return $this->belongsTo(User::class,'idortu','id_user');
        # code...
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perkembangan extends Model
{
    use HasFactory;
    protected $fillable=[
        'idperkembangan',
        'idbalita',
        'panjang_badan',
        'umur',
        'status'
    ];
    protected $primaryKey = 'idperkembangan';
    protected $casts = [
        'idperkembangan'=> 'string',
    ];
    protected $keyType = 'string';
 
    public $incrementing = false;
    public function balita()
    {
    //  idposyandu pertama dari penamaan database disini, idposyandu setelah koma dari database asli posyandu
     return $this->belongsTo(balita::class,'idbalita','idbalita');
    }
    public function detail()
    {
    //  idposyandu pertama dari penamaan database disini, idposyandu setelah koma dari database asli posyandu
     return $this->hasmany(detail_perkembangan::class,'idperkembangan','idperkembangan');
    }
}

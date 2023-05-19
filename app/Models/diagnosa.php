<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\CarbonImmutable;

class diagnosa extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            $model->idDiagnosa = str_replace([' ', "'"], '-', strtolower(  'diagnosa-' . CarbonImmutable::now()->timestamp . Str::random(3) ));
        });
    }

    protected $fillable = [
       
        'tanggal',
        'idDiagnosa',
        'idaturan',
        'idbalita',
        'hasil_diagnosa',
        
    ];
    public function balita()
    {
        return $this->belongsTo(balita::class,'idbalita','idbalita');
    }


    protected $primaryKey = 'idDiagnosa';
    protected $keyType = 'string';
 
    public $incrementing = false;
    
   
    protected $casts = [
        'tanggal' => 'datetime',
        'idDiagnosa'=> 'string',
    ];

}

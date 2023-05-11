<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class aturan extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $count = static::count();
            $model->idaturan = Str::upper(substr($model->jenis_kelamin,0,1)).'-' . str_pad($count + 1, 2, '0', STR_PAD_LEFT);
        });
        // static::creating(function ($model) {
        //     $model->key = str_replace([' ','/', "'"], '-', strtolower($model->idGejala . ' ' . $model->namaGejala));
        // });
    }
    protected $fillable=[
        'idaturan',
        'jenis_kelamin',
        'umur',
        'panjang_badan',
        'penyakit'
    ];
    protected $primaryKey = 'idaturan';
    protected $casts = [
        'idaturan'=> 'string',
    ];
}

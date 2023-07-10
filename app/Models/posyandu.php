<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posyandu extends Model
{
    use HasFactory;



    protected $fillable=[
        'idposyandu',
        'nama_posyandu',
        'alamat_posyandu',
        'jadwal_posyandu'
    ];
    protected $primaryKey = 'idposyandu';
    protected $casts = [
        'idposyandu'=> 'string',
    ];
    protected $keyType = 'string';
 
    public $incrementing = false;


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->idposyandu = static::generateID();
        });
    }

    public static function generateID()
    {
        $latestBarang = static::where('idposyandu', 'LIKE', 'ps-%')->orderBy('idposyandu', 'desc')->first();

        if ($latestBarang) {
            $latestCode = $latestBarang->idposyandu;
            $latestNumber = intval(substr($latestCode, 4));
            $newNumber = $latestNumber + 1;
            $paddedNumber = str_pad($newNumber, 4, '0', STR_PAD_LEFT);
            return 'ps-' . $paddedNumber;
        } else {
            return 'ps-0001';
        }
    }

    private static function incrementCode($code)
    {
        $lastChar = substr($code, -1);

        if ($lastChar === 'Z') {
            return static::incrementCode(substr($code, 0, -1)) . 'A';
        }

        return substr($code, 0, -1) . ++$lastChar;
    }
}

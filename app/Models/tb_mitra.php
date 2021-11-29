<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\tb_wisata;

class tb_mitra extends Model
{
    use HasFactory;

    protected $table= 'tb_mitra';
    protected $fillable=['prov_id','city_id','distrik_id','sub_distrik_id',
                         'nama','telpon','status'];

    //relasi ke tb_wisata
    public function tb_wisata()
    {
        return $this->hasMany(tb_wisata::class, 'mitra_id');
    }
}

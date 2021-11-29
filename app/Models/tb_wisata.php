<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_mitra;

class tb_wisata extends Model
{
    use HasFactory;


    protected $table='tb_wisata';
    protected $fillable=['prov_id','city_id','distrik_id','sub_distrik_id',
    'mitra_id', 'nama','short_description','long_description','thumbnail',
    'kapasitas','status'];

    public function tb_mitra()
    {
        return $this->belongsTo(tb_mitra::class,'id');
    }

  
}

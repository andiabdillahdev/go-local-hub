<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_transportasi;

class tb_kategori_transportasi extends Model
{
    use HasFactory;
    protected $table='tb_kategori_transportasi';
    protected $fillable=['nama','status','prov_id','city_id','distrik_id','sub_distrik_id'];
    protected $guarded=[];

    public function tb_transportasi()
    {
        return $this->hasMany(tb_transportasi::class,'id_kategori_transportasi');
    }
}


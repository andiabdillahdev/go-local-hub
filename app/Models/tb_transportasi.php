<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tb_kategori_transportasi;

class tb_transportasi extends Model
{
    use HasFactory;
    protected $table='tb_transportasi';
    protected $fillable=['nama','nomor','type','id_kategori_transportasi'];
    protected $guarded=[];

    public function tb_kategori_transportasi()
    {
        return $this->belongsTo(tb_kategori_transportasi::class,'id');
    }
}

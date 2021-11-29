<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_subkategori extends Model
{
    use HasFactory;

    protected $table='tb_subkategori';
    protected $fillable=['id_kategori','nama','image','prefix','status','slug'];

}

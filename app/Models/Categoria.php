<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table='categorias';

    protected $primaryKey='id_categoria';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'id_categoria',
        'nombre'
    ];
}

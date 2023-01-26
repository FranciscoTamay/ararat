<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    use HasFactory;
    protected $table='tipo_producto';

    protected $primaryKey='id_tipo_producto';

    public $incrementing=true;

    public $timestamps=false;

    protected $fillable=[
        'id_tipo_producto',
        'nombre',
      
    ];
}

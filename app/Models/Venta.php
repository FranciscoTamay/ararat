<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table='ventas';

    protected $primaryKey='folio';

    public $incrementing=false;

    public $timestamps=false;

    protected $fillable=[
        'folio',
        'fecha',
        'cantidad_productos',
        'total'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = ['cod_proveedor', 'proveedor', 'correo', 'telefono'];

   public function Facturas(){
        return $this->hasMany(Factura::class);
    }
}

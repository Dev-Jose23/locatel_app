<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = ['cod_proveedor', 'proveedor', 'correo', 'telefono'];
    protected $dates = ['created_at','updated_at','fecha'];

   public function Facturas(){
        return $this->hasMany(Factura::class);
    }
}

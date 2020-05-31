<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = ['num_factura', 'proveedor_id', 'fecha', 'foto', 'status'];
  

    public function Proveedor(){
        return $this->belongsTo(Proveedor::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Componente extends Model
{
    use SoftDeletes;

    protected $table = 'componentes';
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen'
    ];

    public function scopeGetAllComponents($query){
        return $this->all();
    }
}

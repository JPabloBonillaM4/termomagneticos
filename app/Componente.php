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

    public function images(){
        return $this->hasMany('App\Models\CarouselImage');
    }

    public function scopeGetAllComponents($query){
        return $this->paginate(6);
    }

    public function scopeGetComponent($query,$id){
        return $query->find($id);
    }
}

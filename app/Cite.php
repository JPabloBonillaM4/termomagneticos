<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cite extends Model
{
    use SoftDeletes;

    protected $table = 'cites';
    protected $fillable = [
        'date',
        'time',
        'name',
        'email',
        'phone',
        'description'
    ];

    public function scopeGetCitesByDate($query,$date){
        return $this->where('date',$date)->get();
    }

    public function scopeGetAllCites($query){
        return $this->all();
    }

    public function scopeNewCite($query,$data){
        return $this->create([
            'date'        => $data->date_cite,
            'time'        => $data->time_cite,
            'name'        => $data->nombre_cita,
            'email'       => $data->correo_cita,
            'phone'       => $data->telefono_cita,
            'description' => $data->motivo
        ]);
    }

    public function scopeDeleteUser($query,$id){
        return $query->find($id)->delete();
    }
}

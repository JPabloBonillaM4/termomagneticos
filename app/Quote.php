<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'quotes';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'description'
    ];

    public function scopeGetQuotes(){
        return $this->all();
    }

    public function scopeNewQuote($query, $data){
        return $this->create([
            'name'        => $data['nombre'],
            'phone'       => $data['telefono'],
            'email'       => $data['email'],
            'description' => $data['cotizacion'],
        ]);
    }

    public function scopeGetAllQuotes(){
        return $this->all();
    }

    public function scopeDeleteQuote($query,$id){
        return $query->find($id)->delete();
    }
}

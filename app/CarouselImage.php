<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarouselImage extends Model
{
    use SoftDeletes;

    protected $table = 'carousel_images';
    protected $fillable = [
        'project_id',
        'image_url'
    ];

    // public function component(){
    //     return $this->belongsTo('App\Componente');
    // }

    public function project(){
        return $this->belongsTo('App\Project','project_id','id');
    }

    public function scopeDeleteImage($query,$id){
        return $this->find($id)->delete();
    }
}

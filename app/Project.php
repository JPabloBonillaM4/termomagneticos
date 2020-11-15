<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'title',
        'subtitle'
    ];
    protected $with = ['images'];

    public function images(){
        return $this->hasMany('App\CarouselImage','id','product_id');
    }

    public function scopeGetAllProjects(){
        return $this->get();
    }
}

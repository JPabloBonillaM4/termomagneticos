<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

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

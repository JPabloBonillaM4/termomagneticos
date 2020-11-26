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
        'subtitle',
        'subcategory_id',
        'status'
    ];
    protected $with = ['images','subcategory'];

    public function images(){
        return $this->hasMany('App\CarouselImage','project_id','id');
    }

    public function subcategory(){
        return $this->hasMany('App\ProjectSubcategorie','id','subcategory_id');
    }

    public function scopeGetAllProjects(){
        return $this->all();
    }

    public function scopeUpdateProject($query,$data){
        return $query->find($data->id)->update([
            'title'          => $data->title,
            'subcategory_id' => $data->subcategory_id
        ]);
    }

    public function scopeDeleteProject($query,$id){
        return $query->find($id)->update(['status' => 0]);
    }

    public function scopeReactiveProject($query,$id){
        return $query->find($id)->update(['status' => 1]);
    }
}

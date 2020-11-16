<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectSubcategorie extends Model
{
    use SoftDeletes;

    protected $table    = 'project_subcategories';
    protected $fillable = [
        'name',
        'categorie_id'
    ];
    protected $with = ['categorie'];

    public function scopeGetAllSubcategories(){
        return $this->all();
    }
    public function categorie(){
        return $this->belongsTo('App\ProjectCategorie','categorie_id','id');
    }
    public function scopeDeleteSubcategorie($query,$id){
        return $query->find($id)->delete();
    }

    public function scopeCreateNewSubcategory($query,$request){
        return $this->create([
            'name'         => $request->name,
            'categorie_id' => $request->categorie_id
        ]);
    }
    
    public function scopeUpdateSubcategorie($query,$request){
        return $query->find($request->id)->update([
            'name'         => $request->name,
            'categorie_id' => $request->categorie_id
        ]);
    }
}
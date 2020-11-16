<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectCategorie extends Model
{
    use SoftDeletes;

    protected $table = 'project_categories';
    protected $fillable = [
        'name'
    ];

    public function subcategories(){
        return $this->hasMany('App\ProjectSubcategorie','categorie_id','id');
    }
}

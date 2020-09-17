<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarouselImage extends Model
{
    use SoftDeletes;

    protected $table = 'carousel_images';
    protected $fillable = [
        'product_id',
        'image_url'
    ];

    public function component(){
        return $this->belongsTo('App\Models\Component');
    }
}

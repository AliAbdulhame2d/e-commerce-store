<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function category() {
        return 
        $this->belongsTo(Category::class);
    }

    //um alle Daten gemeinsam zu hinzufügen
    protected $fillable = [
        'name',
        'price',
        'discount',
        'quantity',
        'category_id',
        'description',
        'image',
    ];
}

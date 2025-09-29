<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\categories;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'status',
        'categorie_id',
    ];
//relasi ke category
public function categories()
    {
       return $this->belongsTo(categories::class, 'categorie_id');
    }
}
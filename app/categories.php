<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\Products;

class categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'categorie_id';
    protected $fillable = ['name','description'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
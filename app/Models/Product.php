<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    public $timestamps = true;

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }

    protected $fillable = [
        'name',
        'size',
        'comments',
        'quantity',
        'created_at',
        'updated_at',
        'brand_id'
    ];
}
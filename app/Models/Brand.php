<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';
    public $timestamps = true;

    public function products()
    {
        return $this->hasMany('App\Models\Products');
    }

    protected $fillable = [
        'name',
        'reference'
    ];
}
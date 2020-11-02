<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'pic',
        'link',
        'priceof',
        'priceper',
        'description'
    ];
    public function store()
    {
        return $this->belongsTo('App\Models\Store');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}

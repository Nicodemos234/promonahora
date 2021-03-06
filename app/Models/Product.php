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

    public function getProductLinkAttribute()
    {
        return '/oferta/'.preg_replace('/\W+/', '-', strtolower($this->name))."-".$this->id ;
    }

    public function getProductImageAttribute()
    {
        return '/storage/'.$this->pic;
    }
}

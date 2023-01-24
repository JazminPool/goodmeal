<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';

    /**
     * The fields that have dates and need Carbon instances
     *
     * @var array
     */
    protected $date = ['created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'address',
        'open_at',
        'close_at',
        'score',
        'banner_url',
        'logo_url',
        'delivery_available',
        'delivery_price_from',
        'delivery_price_tax',
    ];

    /**
     * Relation with products table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_stores', 'id_store', 'id_product');
    }

    /**
     * Relation with orders table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'id_store', 'id');
    }
}

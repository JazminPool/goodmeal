<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    /**
     * The fields that have dates and need Carbon instances
     *
     * @var array
     */
    protected $date = ['delivery_at', 'created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Relation with stores table
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function store() {
        return $this->hasOne(Store::class, 'id', 'id_store');
    }

    /**
     * Relation with products table
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'orders_products', 'id_order', 'id_product');
    }
}

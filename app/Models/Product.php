<?php
/**
 * Created by PhpStorm.
 * User: Rajani Maharjan
 * Date: 8/9/2016
 * Time: 10:49 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $fillable=[
        'name','description','price','images','product_id'
    ];

    public function categories(){

        return $this->belongsTo(Category::class);
    }
}
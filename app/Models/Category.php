<?php
/**
 * Created by PhpStorm.
 * User: Rajani Maharjan
 * Date: 8/9/2016
 * Time: 10:54 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 7/18/18
 * Time: 2:39 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\Category', 'categoryId');
    }
}
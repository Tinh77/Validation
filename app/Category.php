<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 7/20/18
 * Time: 2:25 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
}
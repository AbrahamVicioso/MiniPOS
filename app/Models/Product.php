<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Primary Key
    protected $primaryKey = 'ProductId';
    //Table Name
    protected $table = 'Products';

    //Attributes
    protected $fillable = [
        'Name',
        'UnitPrice',
        'RefCode'
    ];
}

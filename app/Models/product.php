<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    protected $fillable = ['name' , 'describtion' , 'price' , 'stock' , 'image'];

    public function categories(){
        return $this->belongsTo(category::class);
    }
}

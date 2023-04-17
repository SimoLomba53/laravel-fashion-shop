<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shoe extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ["brand", "model", "size", "price_buy", "price_resell", "discount", "image"];
}

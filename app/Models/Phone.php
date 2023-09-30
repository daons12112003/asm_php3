<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Phone extends Model
{
    use HasFactory, SoftDeletes;// add soft delete;
   
    protected $table = 'phones';
    protected $fillable = ['id', 'name', 'image', 'price', 'description', 'category_id'];

}
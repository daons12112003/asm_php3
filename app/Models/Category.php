<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // add soft delete

class Category extends Model
{
    use HasFactory, SoftDeletes;// add soft delete;
    protected $table = 'category';
    protected $fillable = ['id', 'name'];
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}

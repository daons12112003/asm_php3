<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bannner extends Model
{
    use HasFactory;
    protected $table = 'bannner';
    protected $fillable = ['id', 'name', 'image', 'date_start', 'date_end'];
}

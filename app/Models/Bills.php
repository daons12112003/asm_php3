<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $table = 'bills';
    protected $fillable = ['user_id','ten_nguoi_nhan','dia_chi_giao_hang','so_dien_thoai','tong_tien','dat_hang','image_path'];
}

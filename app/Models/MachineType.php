<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class MachineType extends Model
{
    use HasFactory, HasApiTokens;

    protected $table = 'loaimaymoc';
    protected $fillable = [
        'maymoc_id',
        'ten_loaimaymoc',
    ];
}

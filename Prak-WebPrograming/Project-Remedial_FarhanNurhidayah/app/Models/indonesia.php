<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indonesia extends Model
{
    use HasFactory;

    protected $table = 'indonesia';

    protected $fillable = [
    	'nama_provinsi'
    ];
}


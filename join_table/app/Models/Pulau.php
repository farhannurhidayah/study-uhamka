<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pulau extends Model
{
    use HasFactory;

    protected $table = 'pulau';

    protected $fillable = [
    	'nama_pulau'
    ];
}


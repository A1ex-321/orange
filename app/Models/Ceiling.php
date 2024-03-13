<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceiling extends Model
{
    use HasFactory;
    protected $table = 'ceiling';

    protected $fillable = [
        'image', 
    ];
 
}

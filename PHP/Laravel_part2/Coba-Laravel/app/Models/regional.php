<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    use HasFactory;
    public $table = "regional_table";

    protected $fillable = [
        'name',
        'negara'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bilgiler extends Model
{
    use HasFactory;
    protected $table="bilgiler";
    protected $fillable=["username","password","created_at","updated_at"];
}

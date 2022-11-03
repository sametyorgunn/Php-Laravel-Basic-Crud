<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormdanModel extends Model
{
    use HasFactory;

    protected $table = "iletisim";
    protected $fillable = ["isim", "soyisim","resim", "created_at", "updated_at"];
}

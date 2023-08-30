<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banners extends Model
{
    use HasFactory;
    protected $table="banners";
    protected $fillable=['id','title','slug','gallery','description','status','group'];
}

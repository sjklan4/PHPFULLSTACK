<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'Category';
    protected $primaryKey = 'id';
    protected $fillalbe = ['컬럼1','컬럼2'];
}

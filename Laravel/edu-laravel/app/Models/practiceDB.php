<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class practiceDB extends Model
{
    use HasFactory;
    protected $table = 'praticeDB';
    protected $primaryKey = 'id';
    protected $fillalbe = ['컬럼1','컬럼2'];
}

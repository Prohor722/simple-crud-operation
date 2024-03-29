<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable=[
      'name','email','phone','status','gender','image'
    ];
    use HasFactory;
}

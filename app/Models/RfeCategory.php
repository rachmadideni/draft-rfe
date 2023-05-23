<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfeCategory extends Model
{
    use HasFactory;
    protected $table = 'rfe_categories';
    protected $fillable = ['name'];
    public $timestamps = false;
}

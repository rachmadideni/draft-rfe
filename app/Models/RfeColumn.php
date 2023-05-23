<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfeColumn extends Model
{
    use HasFactory;
    protected $table = 'rfe_columns';
    protected $fillable = ['rfe_category_id','name','is_mandatory','table_ref'];
    public $timestamps = false;
}

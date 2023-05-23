<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RfeValue extends Model
{
    use HasFactory;
    protected $table = 'rfe_values';
    protected $fillable = ['rfe_column_id','old_value','new_value','requested_by','requested_date','approved_by','approved_date','rejected','rejected_by','rejected_reason','statuses','changes_type'];
    public $timestamps = false;
}

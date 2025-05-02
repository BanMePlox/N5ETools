<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    // The table associated with the model (optional if the name matches)
    protected $table = 'conditions';

    // Specify which columns are mass assignable
    protected $fillable = [
        'name',
        'description',
        'type',
        'max_rank',
    ];
}

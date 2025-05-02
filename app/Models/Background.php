<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_proficiencies',
        'tool_proficiencies',
        'equipment',
        'equipment_pack',
        'feature',
        'selection',
    ];
}

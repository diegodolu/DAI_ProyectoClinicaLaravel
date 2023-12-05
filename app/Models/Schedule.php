<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function Shifts()
    {
        return $this->hasMany(Shift::class);
    }
}

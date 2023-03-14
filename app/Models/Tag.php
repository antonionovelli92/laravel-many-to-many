<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    // Assegno la relazione con i progetti
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCard extends Model
{
    use HasFactory;
    public function tasklist() {
        return $this->belongsTo('App\TaskList');
    }
}

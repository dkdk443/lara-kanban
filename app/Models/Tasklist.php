<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaskList extends Model
{
    use HasFactory;
    public function taskcards() {
        return $this->hasMany('App\TaskCard');
    }

    public function user() {
        return $this->BelongsTo('App\User');
    }
}

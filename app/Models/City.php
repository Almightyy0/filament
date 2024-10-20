<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;
    public $fillable = ['name', 'state_id'];
    public $timestamps = true;

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}

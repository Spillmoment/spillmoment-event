<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'photo', 'address', 'competence', 'position'];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}

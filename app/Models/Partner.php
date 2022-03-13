<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

	 protected $fillable = ['name', 'slug', 'address'];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}

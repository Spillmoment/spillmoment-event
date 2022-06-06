<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spillmoment extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id', 'title', 'slug', 'description', 'image', 'link'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $dates = ['start_time', 'event_date'];

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}

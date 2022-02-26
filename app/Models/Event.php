<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $dates = ['start_time', 'end_time', 'event_date'];

    protected $fillable = [
        'event_category_id', 'speaker_id', 'title', 'slug', 'body', 'photo', 'price', 'link', 'partner',
        'quota', 'type', 'status', 'place', 'event_date', 'start_time', 'end_time', 'started'
    ];

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }
}

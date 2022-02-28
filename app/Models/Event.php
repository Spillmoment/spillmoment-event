<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

	 protected $fillable = [
		'id', 'event_category_id', 'speaker_id', 'title', 'slug', 'body', 'photo', 'price', 'link', 'partner', 'quota', 'type', 'status', 'place'
	];
    protected $dates = ['start_time', 'event_date'];

    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }
}

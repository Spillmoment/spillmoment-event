<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Event extends Model
{
    use HasFactory;


    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }

    protected $dates = ['start_time', 'end_time', 'event_date'];

    protected $fillable = [
        'event_category_id', 'speaker_id', 'partner_id','title', 'slug', 'body', 'photo', 'price', 'link', 'partner',
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

	 public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id');
    }

    public function event_register()
    {
        return $this->hasMany(EventRegister::class);
    }
}

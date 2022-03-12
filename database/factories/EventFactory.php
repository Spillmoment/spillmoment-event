<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\EventCategory;
use App\Models\Partner;
use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $title = $this->faker->name();

        return [
            'title' => $title,
            'slug'  => \Str::slug($title),
            'event_category_id' => $this->faker->randomElement(EventCategory::all()),
            'speaker_id' => $this->faker->randomElement(Speaker::all()),
            'partner_id' => $this->faker->randomElement(Partner::all()),
            'body'  => $this->faker->paragraph(),
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
            'price' => $this->faker->randomNumber(2),
            'link'  => 'https:example.com',
            'partner' => 'BIll Gates',
            'quota' => 5,
            'place' => 'Stadion Bung karno',
            'event_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'start_time' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'end_time' => $this->faker->dateTimeInInterval($startDate = '-30 years', $interval = '+ 5 days', $timezone = null)
        ];
    }
}

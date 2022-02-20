<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EventCategory;

class EventCategorySeeder extends Seeder
{

    protected $eventCategories = [
        [
            'name' => 'Administrator',
            'slug' => 'administrator'
        ],
        [
            'name' => 'Programmer',
            'slug' => 'programmer'
        ],
        [
            'name' => 'Marketing',
            'slug' => 'marketing'
        ],
        [
            'name' => 'Designer',
            'slug' => 'designer'
        ],
        [
            'name' => 'DevOps',
            'slug' => 'devops'
        ]

    ];


    public function run()
    {

        foreach ($this->eventCategories as $eventCategory) {
            EventCategory::create($eventCategory);
        }
    }
}

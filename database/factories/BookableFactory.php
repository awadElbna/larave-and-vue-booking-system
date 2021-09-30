<?php

namespace Database\Factories;
use Illuminate\Support\Arr;
use App\Models\Bookable;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookableFactory extends Factory
{
    protected $model = Bookable::class;

    public $suffix = [
    'Villa',
    'House',
    'Cottage',
    'Luxury Villas',
    'Cheap House',
    'Rooms',
    'Cheap Rooms',
    'Luxury Rooms',
    'Fancy Rooms'
    ];
    public function definition()
    {
        return [
            'title' => $this->faker->city . ' ' . Arr::random($this->suffix),
            'description' => $this->faker->text(),
            'price' => random_int(15, 600)
        ];
    }
}

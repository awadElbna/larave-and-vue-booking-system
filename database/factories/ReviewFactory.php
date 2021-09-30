<?php
namespace Database\Factories;
use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{

    protected $model = Review::class;

    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'content' => $this->faker->sentences(5, true),
            'rating' => random_int(1, 5)
        ];
    }

}

<?php

namespace Database\Factories;

use App\Models\Student_course;
use Illuminate\Database\Eloquent\Factories\Factory;

class Student_courseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student_course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->randomDigit,
            'course_id' => $this->faker->randomDigit,
        ];
    }
}

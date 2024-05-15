<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition()
    {
        $images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg', 'image6.jpg',
            'image7.jpg', 'image8.jpg', 'image9.jpg', 'image10.jpg', 'image11.jpg', 'image12.jpg'
        , 'image13.jpg', 'image14.jpg', 'image15.jpg', 'image16.jpg', 'image17.jpg', 'image18.jpg', 'image19.jpg', 'image20.jpg'
        , 'image21.jpg', 'image22.jpg', 'image23.jpg', 'image24.jpg', 'image25.jpg', 'image26.jpg', 'image27.jpg', 'image28.jpg'
        , 'image29.jpg', 'image30.jpg', 'image31.jpg', 'image32.jpg', 'image33.jpg', 'image34.jpg', 'image35.jpg', 'image36.jpg'
        , 'image37.jpg', 'image38.jpg', 'image39.jpg', 'image40.jpg', 'image41.jpg', 'image42.jpg', 'image43.jpg', 'image44.jpg'
        , 'image45.jpg', 'image46.jpg', 'image47.jpg', 'image48.jpg', 'image49.jpg', 'image50.jpg'];
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'user_id' => 1,
            'company_name' => $this->faker->company,
            'location' => $this->faker->city,
            'salary' => $this->faker->randomFloat(2, 1000, 20000),
            'employment_type' => $this->faker->randomElement(['Full Time', 'Part Time', 'Contract']),
            'experience_level' => $this->faker->randomElement(['Entry Level', 'Mid Level', 'Senior Level']),
            'category' => $this->faker->word,
            'requirements' => $this->faker->paragraph,
            'benefits' => $this->faker->paragraph,
            'application_deadline' => $this->faker->date(),
            'status' => 'Activo',
            'image' => $this->faker->randomElement($images),
        ];
    }
}

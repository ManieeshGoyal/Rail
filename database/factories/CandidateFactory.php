<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\JobPosting;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

class CandidateFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = Candidate::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition() {
        return [
            'name' => $name = $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'job_posting_id' => JobPosting::inRandomOrder()->first()->id,
            'resume' => UploadedFile::fake()->create('document.pdf')->store('/resume'),
        ];
    }
}

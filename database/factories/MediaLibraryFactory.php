<?php

namespace Database\Factories;

use App\Helpers\Helper;
use App\Models\MediaLibrary;
use Illuminate\Database\Eloquent\Factories\Factory;
use function storage_path;

class MediaLibraryFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = MediaLibrary::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition() {
        MediaLibrary::truncate();
        return [
            'name' => $name = $this->faker->word,
            'extension' => $extension = 'jpeg',
            'slug' => $slug = Helper::generateSlug(MediaLibrary::class, $name . '.' . $extension),
            'mime_type' => $this->faker->mimeType,
            'url' => 'http://127.0.0.1:8000/storage/media-library/' . $this->faker->image(storage_path('app/public/media-library/'), 1040, 800, NULL, FALSE),
        ];
    }
}

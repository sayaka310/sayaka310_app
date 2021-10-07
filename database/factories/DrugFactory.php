<?php

namespace Database\Factories;

use App\Models\Drug;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use Illuminate\Support\Arr;

class DrugFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Drug::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word();
        $component = ['ロキソプロフェンナトリウム', 'テプレノン'];

        return [
            'name' => $name,
            'component' => $component[array_rand($component)],
            'category_id' => Arr::random(Arr::pluck(Category::all(), 'id')),
            'regimen' => '1回1錠 1日3回 毎食後',
            'effect' => '頭痛、発熱、歯痛、生理痛に効果があります',
            'img_url' => 'storage/drug_image/' . rand(1, 3) . '.jpg',
        ];
    }
}

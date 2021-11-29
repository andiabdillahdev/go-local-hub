<?php

namespace Database\Factories;
use App\Models\tb_transportasi;

use Illuminate\Database\Eloquent\Factories\Factory;

class transportasifactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model= tb_transportasi::class;
    public function definition()
    {
        return [

            //
            // 'id_kategori_trasnportasi'=$this->faker->in
            'nama'=>$this->faker->name,
            'nomor'=>$this->faker->number,
            'type'=>$this->faker->name,
        ];
    }
}

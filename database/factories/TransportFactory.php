<?php

namespace Database\Factories;

use App\Models\Transport;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TransportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "truck_number"=> rand(100, 1000),
            "place"=> $this->place(),
            "date"=> Carbon::now()->subDays(rand(0, 90)),
            "point"=> rand(1,5),
            "person"=> $this->faker->firstNameMale." ".$this->faker->lastName,
            "mobile"=> $this->phone(),
            "fare"=> rand(1000, 9000),
            "commission"=> rand(1000, 9000),
            "invoice"=> rand(1000, 9000),
            "status"=> "Ok",
            "description"=> "due",
        ];
    }

    private function place(){
        $places = ["sylhet", "Dhaka", "Chittagong", "Rajshahi", "Khulna", "Borishal"];
        return $places[rand(0,5)];
    }

    private function phone(){
        return "01".rand(5,9).rand(1,9).rand(1000000, 9999999);
    }
}

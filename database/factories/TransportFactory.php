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
            "date"=> Carbon::parse("12/02/2001"),
            "point"=> rand(1,5),
            "person"=> $this->faker->firstNameMale." ".$this->faker->lastName,
            "mobile"=> $this->faker->phoneNumber,
            "fare"=> 2020,
            "commission"=> 1000,
            "status"=> "Ok",
            "invoice"=> 30000,
            "description"=> "due",
        ];
    }

    private function place(){
        $places = ["sylhet", "Dhaka", "Chittagong", "Rajshahi", "Khulna", "Borishal"];
        return $places[rand(0,5)];
    }
}

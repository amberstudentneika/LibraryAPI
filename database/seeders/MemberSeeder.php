<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $gender = $faker->randomElement(['male', 'female']);

        for ($i = 0; $i < 20; $i++) {

            Member::create([
                'fName' => $faker->firstname,
                'lName' => $faker->lastname,
                'gender' => $gender,
                'address' => $faker->address,
                'phoneNum' => $faker->phoneNumber,
                'email' => $faker->email,
            ]);
        }

    }
}

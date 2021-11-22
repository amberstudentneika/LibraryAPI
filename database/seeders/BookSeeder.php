<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            Book::create([
                'title' => $faker->jobTitle,
                'author' => $faker->name,
                'isbn' => $faker->creditCardNumber,
                'publisher' => $faker->company,
                'pubDate' => $faker->date(),
                'condition' => 'New',
                'quantity' => 10
            ]);
        }
    }
}

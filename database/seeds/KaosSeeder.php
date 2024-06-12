<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KaosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0;$i<100;$i++)
        {

        DB::table('_kaos')->insert([
            'Merek' => $faker->word(),
            'Ukuran' => $faker->word(),
            'Year'  => $faker->year(),
            'Poster' => $faker->ipv4()
            ]);
        }
    }
}

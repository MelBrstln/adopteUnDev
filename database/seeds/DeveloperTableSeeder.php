<?php

use Illuminate\Database\Seeder;

class DeveloperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\developer::class, 7)->create();

        factory(App\developer::class, 3)->create()->each(function ($developer) {
            $developer->company()->save(factory(App\company::class)->make());
        });
    }
}

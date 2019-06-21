<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\company::class, 7)->create();

        factory(App\company::class, 3)->create()->each(function ($company) {
            $company->developer()->save(factory(App\developer::class)->make());
        });
    }
}

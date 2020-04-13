<?php

use Illuminate\Database\Seeder;

class PoiUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PoiUser::class, 50)->create();
    }
}

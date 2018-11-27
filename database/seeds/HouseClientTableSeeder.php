<?php

use Illuminate\Database\Seeder;
use App\HouseClient;
class HouseClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HouseClient::class, 40)->create();
    }
}

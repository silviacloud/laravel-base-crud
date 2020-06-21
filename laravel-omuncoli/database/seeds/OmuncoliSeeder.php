<?php

use App\Omuncolo;
use Illuminate\Database\Seeder;

class OmuncoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Omuncolo::class, 100)->create();
    }
}

<?php

use App\Sprekerskosten;
use Illuminate\Database\Seeder;

class SprekerskostenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sprekerskosten = new Sprekerskosten();
        $sprekerskosten->id = 1;
        $sprekerskosten->budget = 25000;
        $sprekerskosten->save();
    }
}

<?php

use App\Maaltijd;
use Illuminate\Database\Seeder;

class MaaltijdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maaltijd = new Maaltijd();
        $maaltijd->soortmaaltijd = "lunch";
        $maaltijd->prijs = 20;
        $maaltijd->beschikbaar = "all";
        $maaltijd->vegetarisch = "nee";
        $maaltijd->save();
        
        $maaltijd = new Maaltijd();
        $maaltijd->soortmaaltijd = "diner";
        $maaltijd->prijs = 30;
        $maaltijd->beschikbaar = "weekend";
        $maaltijd->vegetarisch = "nee";
        $maaltijd->save();
        
        $maaltijd = new Maaltijd();
        $maaltijd->soortmaaltijd = "combo";
        $maaltijd->prijs = 50;
        $maaltijd->beschikbaar = "weekend";
        $maaltijd->vegetarisch = "nee";
        $maaltijd->save();
    }
}

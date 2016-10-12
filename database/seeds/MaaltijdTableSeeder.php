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
        $maaltijd->reservering = 1;
        $maaltijd->soortmaaltijd = "lunch";
        $maaltijd->prijs = 20;
        $maaltijd->beschikbaar = "all";
        $maaltijd->vegetarisch = "nee";
        $maaltijd->barcode = "0420691337001";
        $maaltijd->save();
        
        $maaltijd = new Maaltijd();
        $maaltijd->reservering = 1;
        $maaltijd->soortmaaltijd = "diner";
        $maaltijd->prijs = 30;
        $maaltijd->beschikbaar = "weekend";
        $maaltijd->vegetarisch = "nee";
        $maaltijd->barcode = "0420691337002";
        $maaltijd->save();
        
        $maaltijd = new Maaltijd();
        $maaltijd->reservering = 1;
        $maaltijd->soortmaaltijd = "combo";
        $maaltijd->prijs = 50;
        $maaltijd->beschikbaar = "weekend";
        $maaltijd->vegetarisch = "nee";
        $maaltijd->barcode = "0420691337003";
        $maaltijd->save();
    }
}

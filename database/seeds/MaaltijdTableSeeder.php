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
        $maaltijd->soort = 1;
        $maaltijd->vegetarisch = "nee";
        $maaltijd->barcode = "0420691337001";
        $maaltijd->save();
        
        $maaltijd = new Maaltijd();
        $maaltijd->reservering = 1;
        $maaltijd->soort = 2;
        $maaltijd->vegetarisch = "nee";
        $maaltijd->barcode = "0420691337001";
        $maaltijd->save();
        
        $maaltijd = new Maaltijd();
        $maaltijd->reservering = 1;
        $maaltijd->soort = 3;
        $maaltijd->vegetarisch = "nee";
        $maaltijd->barcode = "0420691337001";
        $maaltijd->save();
    }
}

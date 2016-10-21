<?php

use App\Maaltijdsoort;
use Illuminate\Database\Seeder;

class MaaltijdsoortTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $maaltijdsoort = new Maaltijdsoort();
        $maaltijdsoort->soort = "geen maaltijd";
        $maaltijdsoort->prijs = 0;
        $maaltijdsoort->beschikbaar = "all";
        $maaltijdsoort->save();
        */
        
        $maaltijdsoort = new Maaltijdsoort();
        $maaltijdsoort->soort = "lunch";
        $maaltijdsoort->prijs = 20;
        $maaltijdsoort->beschikbaar = "all";
        $maaltijdsoort->save();
        
        $maaltijdsoort = new Maaltijdsoort();
        $maaltijdsoort->soort = "diner";
        $maaltijdsoort->prijs = 30;
        $maaltijdsoort->beschikbaar = "weekend";
        $maaltijdsoort->save();
        
        $maaltijdsoort = new Maaltijdsoort();
        $maaltijdsoort->soort = "combo";
        $maaltijdsoort->prijs = 50;
        $maaltijdsoort->beschikbaar = "weekend";
        $maaltijdsoort->save();
    }
}

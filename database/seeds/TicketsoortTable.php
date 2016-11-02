<?php

use App\Ticketsoort;
use Illuminate\Database\Seeder;

class TicketsoortTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticketsoort = new Ticketsoort();
        $ticketsoort->soort = "vrijdag";
        $ticketsoort->prijs = 45;
        $ticketsoort->beschikbaar = 228;
        $ticketsoort->save();
        
        $ticketsoort = new Ticketsoort();
        $ticketsoort->soort = "zaterdag";
        $ticketsoort->prijs = 60;
        $ticketsoort->beschikbaar = 217;
        $ticketsoort->save();
        
        $ticketsoort = new Ticketsoort();
        $ticketsoort->soort = "zondag";
        $ticketsoort->prijs = 30;
        $ticketsoort->beschikbaar = 216;
        $ticketsoort->save();
        
        $ticketsoort = new Ticketsoort();
        $ticketsoort->soort = "passe-partout";
        $ticketsoort->prijs = 100;
        $ticketsoort->save();
        
        $ticketsoort = new Ticketsoort();
        $ticketsoort->soort = "weekend";
        $ticketsoort->prijs = 80;
        $ticketsoort->save();
    }
}

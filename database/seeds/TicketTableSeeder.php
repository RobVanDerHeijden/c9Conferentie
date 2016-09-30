<?php
use App\Ticket;
use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ticket = new Ticket();
        $ticket->idMaaltijd = 1;
        $ticket->soort = "vrijdag";
        $ticket->prijs = 45;
        $ticket->beschikbaar = 250;
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->idMaaltijd = 1;
        $ticket->soort = "zaterdag";
        $ticket->prijs = 60;
        $ticket->beschikbaar = 250;
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->idMaaltijd = 1;
        $ticket->soort = "zondag";
        $ticket->prijs = 30;
        $ticket->beschikbaar = 250;
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->idMaaltijd = 1;
        $ticket->soort = "passe-partout";
        $ticket->prijs = 100;
        $ticket->beschikbaar = 250;
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->idMaaltijd = 1;
        $ticket->soort = "weekend";
        $ticket->prijs = 80;
        $ticket->beschikbaar = 250;
        $ticket->save();
    }
}

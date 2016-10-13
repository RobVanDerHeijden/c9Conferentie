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
        $ticket->reservering = 1;
        $ticket->soort = 1;
        $ticket->barcode = "31415926535989732384262433832795001";
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->reservering = 1;
        $ticket->soort = 2;
        $ticket->barcode = "31415926535989732384262433832795002";
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->reservering = 1;
        $ticket->soort = 3;
        $ticket->barcode = "31415926535989732384262433832795003";
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->reservering = 1;
        $ticket->soort = 4;
        $ticket->barcode = "31415926535989732384262433832795004";
        $ticket->save();
        
        $ticket = new Ticket();
        $ticket->reservering = 2;
        $ticket->soort = 5;
        $ticket->barcode = "31415926535989732384262433832795005";
        $ticket->save();
    }
}

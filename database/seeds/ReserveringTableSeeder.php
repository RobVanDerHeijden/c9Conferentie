<?php

use App\Reservering;
use Illuminate\Database\Seeder;

class ReserveringTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservering = new Reservering();
        $reservering->idUser = 1;
        //$reservering->idTicket = 1;
        //$reservering->idMaaltijd = 1;
        $reservering->betaalmethode = "PayPal";
        //$reservering->barcode = "04206913370";
        $reservering->prijs = 100;
        $reservering->save();
        
        $reservering = new Reservering();
        $reservering->idUser = 1;
        //$reservering->idTicket = 2;
        //$reservering->idMaaltijd = 2;
        $reservering->betaalmethode = "CreditCard";
        //$reservering->barcode = "314159265359897323842624338327950";
        $reservering->prijs = 80;
        $reservering->save();
    }
}

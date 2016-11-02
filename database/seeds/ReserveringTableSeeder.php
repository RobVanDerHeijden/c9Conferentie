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
        // Reservering id:1
        $reservering = new Reservering();
        $reservering->idUser = 1;
        $reservering->betaalmethode = "PayPal";
        $reservering->prijs = 100;
        $reservering->save();
        // Reservering id:2
        $reservering = new Reservering();
        $reservering->idUser = 2;
        $reservering->betaalmethode = "CreditCard";
        $reservering->prijs = 80;
        $reservering->save();
        
        // Reservering id:3
        $reservering = new Reservering();
        $reservering->idUser = 3;
        $reservering->betaalmethode = "PayPal";
        $reservering->prijs = 335; // Alle soorten tickets + 1 lunch op vrijdag
        $reservering->save();
        // Reservering id:4
        $reservering = new Reservering();
        $reservering->idUSer = 4;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:5
        $reservering = new Reservering();
        $reservering->idUSer = 5;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:6
        $reservering = new Reservering();
        $reservering->idUSer = 6;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:7
        $reservering = new Reservering();
        $reservering->idUSer = 7;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:8
        $reservering = new Reservering();
        $reservering->idUSer = 8;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:9
        $reservering = new Reservering();
        $reservering->idUSer = 9;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:10
        $reservering = new Reservering();
        $reservering->idUSer = 10;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:11
        $reservering = new Reservering();
        $reservering->idUSer = 11;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        // Reservering id:12
        $reservering = new Reservering();
        $reservering->idUSer = 12;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
        
        // Reservering id:13
        $reservering = new Reservering();
        $reservering->idUSer = 16;
        $reservering->betaalmethode = "Paypal";
        $reservering->prijs = 335; // Alle soorten tickets + lunch op vrijdag
        $reservering->save();
    }
}

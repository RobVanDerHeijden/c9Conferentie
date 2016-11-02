<?php
use App\Aanmelding;
use Illuminate\Database\Seeder;

class AanmeldingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 4;
        $aanmelding->idUser = 1;
        $aanmelding->onderwerp = "Knowledge";
        $aanmelding->omschrijving = "The more you learn, the more you earn!";
        $aanmelding->wensen = "Bookschelves";
        $aanmelding->voorkeur = 0;
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 14;
        $aanmelding->idUser = 2;
        $aanmelding->onderwerp = "Lamborghini";
        $aanmelding->omschrijving = "You will never guess what I like even more!";
        $aanmelding->wensen = "Beamer";
        $aanmelding->voorkeur = 4;
        $aanmelding->kosten = 1000;
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 25;
        $aanmelding->idUser = 3;
        $aanmelding->onderwerp = "Cars";
        $aanmelding->omschrijving = "Cars go vroom vroom";
        $aanmelding->wensen = "Beamer";
        $aanmelding->voorkeur = 0;
        $aanmelding->kosten = 2000;
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 56;
        $aanmelding->idUser = 4;
        $aanmelding->onderwerp = "API Riot";
        $aanmelding->omschrijving = "How to use and implement the data from the Riot API";
        $aanmelding->wensen = "Powerpoint";
        $aanmelding->voorkeur = 14;
        $aanmelding->kosten = 3000;
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 21;
        $aanmelding->idUser = 5;
        $aanmelding->onderwerp = "API";
        $aanmelding->omschrijving = "How to use and implement API";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 200;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 2;
        $aanmelding->idUser = 6;
        $aanmelding->onderwerp = "API made";
        $aanmelding->omschrijving = "How API is made";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 3.5;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 9;
        $aanmelding->idUser = 7;
        $aanmelding->onderwerp = "Java";
        $aanmelding->omschrijving = "How Java is made";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 33.5;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 10;
        $aanmelding->idUser = 8;
        $aanmelding->onderwerp = "Javascript";
        $aanmelding->omschrijving = "Java vs Javascript";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 65;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 30;
        $aanmelding->idUser = 9;
        $aanmelding->onderwerp = "Data";
        $aanmelding->omschrijving = "Data in a Nutshell";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 99;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 31;
        $aanmelding->idUser = 10;
        $aanmelding->onderwerp = "Datamining";
        $aanmelding->omschrijving = "is Datamining wrong";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 5;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 32;
        $aanmelding->idUser = 11;
        $aanmelding->onderwerp = "Protect Data";
        $aanmelding->omschrijving = "How to secure your data";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 50;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 36;
        $aanmelding->idUser = 12;
        $aanmelding->onderwerp = "Passwords";
        $aanmelding->omschrijving = "What is a GOOD password?";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 1250;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 37;
        $aanmelding->idUser = 13;
        $aanmelding->onderwerp = "Password storing";
        $aanmelding->omschrijving = "How to safely store your passwords";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 350;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 38;
        $aanmelding->idUser = 14;
        $aanmelding->onderwerp = "Salty passwords";
        $aanmelding->omschrijving = "Two spoons of salf should do it";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 1500;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
        
        $aanmelding = new Aanmelding();
        $aanmelding->idSlot = 68;
        $aanmelding->idUser = 15;
        $aanmelding->onderwerp = "MySQL";
        $aanmelding->omschrijving = "MySQL? More like YourSQL, am I right?";
        $aanmelding->wensen = "Powerpoint";
        //$aanmelding->voorkeur = 14;
        $aanmelding->kosten = 10;
        $aanmelding->status = "Geaccepteerd";
        $aanmelding->save();
    }
}

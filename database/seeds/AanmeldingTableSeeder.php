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
    }
}

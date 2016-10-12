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
        $aanmelding->wensen = "Beamer";
        $aanmelding->voorkeur = 3;
        $aanmelding->save();
    }
}

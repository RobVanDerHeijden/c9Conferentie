<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->naam = "Rob";
        $user->tussenvoegsel = "van";
        $user->achternaam = "der Heijden";
        $user->email = "bunky_rob@hotmail.com";
        $user->telnummer = "0621819898";
        $user->adres = "Burgemeester van Erpstraat 29 A";
        $user->woonplaats = "Berghem";
        $user->gebruikersnaam = "FriendlyRob";
        $user->password =bcrypt("rob");
        $user->rol = "organisator";
        $user->save();
        
        $user = new User();
        $user->naam = "Danzel";
        $user->tussenvoegsel = "van";
        $user->achternaam = "DANNYYYY";
        $user->email = "Danzel";
        $user->telnummer = "Danzel";
        $user->adres = "Danzel";
        $user->woonplaats = "Danzel";
        $user->gebruikersnaam = "Danzel";
        $user->password =bcrypt("Danzel");
        $user->rol = "organisator";
        $user->save();
        
    }
}

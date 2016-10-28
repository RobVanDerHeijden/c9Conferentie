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
        
        $user = new User();
        $user->naam = "Roy";
        $user->tussenvoegsel = "de";
        $user->achternaam = "Kooleboy";
        $user->email = "roy@royboy.com";
        $user->telnummer = "0656564545";
        $user->adres = "Roystraat 789";
        $user->woonplaats = "Royville";
        //$user->gebruikersnaam = "Danzel";
        //$user->password =bcrypt("Danzel");
        $user->rol = "bezoeker";
        $user->save();
        
        $user = new User();
        $user->naam = "Erwin";
        $user->tussenvoegsel = "de";
        $user->achternaam = "swagger";
        $user->email = "er@win.com";
        $user->telnummer = "0689787889";
        $user->adres = "Rstraat 4646";
        $user->woonplaats = "Rwinningville";
        //$user->gebruikersnaam = "Danzel";
        //$user->password =bcrypt("Danzel");
        $user->rol = "bezoeker";
        $user->save();
        
        $user = new User();
        $user->naam = "Mitchell";
        $user->tussenvoegsel = "het";
        $user->achternaam = "Jatoch";
        $user->email = "M@tjel.com";
        $user->telnummer = "0674185296";
        $user->adres = "M to the tjel 1111";
        $user->woonplaats = "Jeweetzelfstad";
        //$user->gebruikersnaam = "Danzel";
        //$user->password =bcrypt("Danzel");
        $user->rol = "bezoeker";
        $user->save();
        
    }
}

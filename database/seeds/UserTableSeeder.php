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
        // User id:1
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
        // User id:2
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
        // User id:3
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
        // User id:4
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
        // User id:5
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
        // User id:6
        $user = new User();
        $user->naam = "Faker";
        $user->tussenvoegsel = "de";
        $user->achternaam = "Demongod";
        $user->email = "F@ker.com";
        $user->telnummer = "0644466644";
        $user->adres = "Soaol Korea";
        $user->woonplaats = "Koreaaaaa";
        $user->rol = "bezoeker";
        $user->save();
        // User id:7
        $user = new User();
        $user->naam = "Lee";
        $user->tussenvoegsel = "sang";
        $user->achternaam = "Heyok";
        $user->email = "F@ker.gmail.com";
        $user->telnummer = "0666556565";
        $user->adres = "Soaol Korea";
        $user->woonplaats = "Koreaaaaa";
        $user->rol = "bezoeker";
        $user->save();
        // User id:8
        $user = new User();
        $user->naam = "Harold";
        $user->tussenvoegsel = "de";
        $user->achternaam = "Koekenbakker";
        $user->email = "H@rold.gmail.com";
        $user->telnummer = "0666556565";
        $user->adres = "bakkerbuurt 99";
        $user->woonplaats = "Amsterdam";
        $user->rol = "bezoeker";
        $user->save();
        // User id:9
        $user = new User();
        $user->naam = "Jinx";
        $user->tussenvoegsel = "de";
        $user->achternaam = "Minx";
        $user->email = "K@boom.gmail.com";
        $user->telnummer = "0698788777";
        $user->adres = "Leagiestreat 111";
        $user->woonplaats = "Riot";
        $user->rol = "bezoeker";
        $user->save();
        // User id:10
        $user = new User();
        $user->naam = "Rito";
        $user->tussenvoegsel = "pls";
        $user->achternaam = "please";
        $user->email = "Ri@t.ls.gmail.com";
        $user->telnummer = "0644553322";
        $user->adres = "Nerfstreat 5";
        $user->woonplaats = "Rito";
        $user->rol = "bezoeker";
        $user->save();
        // User id:11
        $user = new User();
        $user->naam = "Irelia";
        $user->tussenvoegsel = "frost";
        $user->achternaam = "But";
        $user->email = "D@ass.gmail.com";
        $user->telnummer = "0633333333";
        $user->adres = "Big boetie 33";
        $user->woonplaats = "Noise";
        $user->rol = "bezoeker";
        $user->save();
        // User id:12
        $user = new User();
        $user->naam = "Key";
        $user->tussenvoegsel = "and";
        $user->achternaam = "Peele";
        $user->email = "Key@peele.gmail.com";
        $user->telnummer = "0659897641";
        $user->adres = "Americasteet 5";
        $user->woonplaats = "Funnieville";
        $user->rol = "bezoeker";
        $user->save();
        // User id:13
        $user = new User();
        $user->naam = "Reaper";
        $user->tussenvoegsel = "de";
        $user->achternaam = "Pieper";
        $user->email = "die@die.die.com";
        $user->telnummer = "0616661666";
        $user->adres = "Diediedie 8";
        $user->woonplaats = "Heros always die";
        $user->rol = "bezoeker";
        $user->save();
        // User id:14
        $user = new User();
        $user->naam = "Mercy";
        $user->tussenvoegsel = "de";
        $user->achternaam = "Support";
        $user->email = "Live@live.live.gmail.com";
        $user->telnummer = "0612332112";
        $user->adres = "LiveLiveLive 9";
        $user->woonplaats = "Heros nevah die";
        $user->rol = "bezoeker";
        $user->save();
        // User id:15
        $user = new User();
        $user->naam = "Tor";
        $user->tussenvoegsel = "nobreen";
        $user->achternaam = "bjorn";
        $user->email = "turret@potg.gmail.com";
        $user->telnummer = "0644778899";
        $user->adres = "Looknohands lane 12";
        $user->woonplaats = "Overwatch potg";
        $user->rol = "bezoeker";
        $user->save();
        // User id:16
        $user = new User();
        $user->naam = "Win";
        $user->tussenvoegsel = "harambe";
        $user->achternaam = "ston";
        $user->email = "Winning@stonning.gmail.com";
        $user->telnummer = "0615915943";
        $user->adres = "Do4H folaif 97";
        $user->woonplaats = "Harambe";
        $user->rol = "bezoeker";
        $user->save();
        // User id:17
        $user = new User();
        $user->naam = "Winston";
        $user->tussenvoegsel = "harambe";
        $user->achternaam = "ston";
        $user->email = "Winning@stonning.gmail.com";
        $user->telnummer = "0615915943";
        $user->adres = "Do4H folaif 97";
        $user->woonplaats = "Harambe";
        $user->rol = "bezoeker";
        $user->save();
        // User id:18
        $user = new User();
        $user->naam = "Kees";
        $user->tussenvoegsel = "de";
        $user->achternaam = "Boer";
        $user->email = "K@B.gmail.com";
        $user->telnummer = "0645612378";
        $user->adres = "Gewonestraat 12";
        $user->woonplaats = "Normalostad";
        $user->rol = "bezoeker";
        $user->save();
    }
}

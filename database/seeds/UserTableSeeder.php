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

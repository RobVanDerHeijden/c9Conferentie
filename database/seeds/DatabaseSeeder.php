<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $this->call(AgendaTableSeeder::class);
        $this->call(MaaltijdTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SlotTableSeeder::class);
        $this->call(TagTableSeeder::class);
        
        $this->call(StatusTableSeeder::class);
        $this->call(ZaalTableSeeder::class);
        */
        $this->call(SlotTableSeeder::class);
    }
}

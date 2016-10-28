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
        
        $this->call(AgendaTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(ZaalTableSeeder::class);
        $this->call(SlotTableSeeder::class);
        $this->call(ReserveringTableSeeder::class);
        $this->call(SlottagTableSeeder::class);
        $this->call(AanmeldingTableSeeder::class);
        $this->call(TicketsoortTable::class);
        $this->call(MaaltijdsoortTable::class);
        $this->call(MaaltijdTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(SprekerskostenSeeder::class);
        
    }
}

<?php
use App\Agenda;
use Illuminate\Database\Seeder;

class AgendaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agenda = new Agenda();
        $agenda->naam="Conferentie agenda 1";
        $agenda->slot=1;
        $agenda->save();
        
        $agenda2 = new Agenda();
        $agenda2->naam="Agenda 2";
        $agenda2->slot=2;
        $agenda2->save();
    }
}

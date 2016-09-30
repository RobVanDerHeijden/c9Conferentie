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
        $agenda->naam="ROYYY";
        $agenda->slot=333;
        $agenda->save();
        
        $agenda2 = new Agenda();
        $agenda2->naam="Dannyyy";
        $agenda2->slot=420;
        $agenda2->save();
    }
}

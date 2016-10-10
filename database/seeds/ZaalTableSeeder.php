<?php
use App\Zaal;
use Illuminate\Database\Seeder;

class ZaalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zaal = new Zaal();
        $zaal->zaalnaam = 'Zaal 1';
        $zaal->save();
        
        $zaal = new Zaal();
        $zaal->zaalnaam = 'Zaal 2';
        $zaal->save();
        
        $zaal = new Zaal();
        $zaal->zaalnaam = 'Zaal 3';
        $zaal->save();
        
        $zaal = new Zaal();
        $zaal->zaalnaam = 'Zaal 4';
        $zaal->save();
    }
}

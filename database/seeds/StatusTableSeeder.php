<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->status = "Open";
        $status->save();
        
        $status = new Status();
        $status->status = "Onder voorbehoud";
        $status->save();
        
        $status = new Status();
        $status->status = "Bezet";
        $status->save();
    }
}

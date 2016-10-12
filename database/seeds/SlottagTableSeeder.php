<?php

use App\SlotTag;
use Illuminate\Database\Seeder;

class SlottagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slottag = new SlotTag();
        $slottag->idSlot = 1;
        $slottag->idTag = 1;
        $slottag->save();
        
        $slottag = new SlotTag();
        $slottag->idSlot = 2;
        $slottag->idTag = 1;
        $slottag->save();
        
        $slottag = new SlotTag();
        $slottag->idSlot = 5;
        $slottag->idTag = 2;
        $slottag->save();
        
        $slottag = new SlotTag();
        $slottag->idSlot = 5;
        $slottag->idTag = 3;
        $slottag->save();
    }
}

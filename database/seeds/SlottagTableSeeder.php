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
        $slotTag = new SlotTag();
        $slotTag->idSlot = 1;
        $slotTag->idTag = 2;
        $slotTag->save();
    }
}

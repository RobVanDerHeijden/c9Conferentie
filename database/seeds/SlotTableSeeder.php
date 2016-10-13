<?php

use App\Slot;
use Illuminate\Database\Seeder;

class SlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* ******************** Vrijdag ******************** */
        /* ******************** Zaal 1 ******************** */
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        /* ******************** Zaal 2 ******************** */
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        /* ******************** Zaal 3 ******************** */
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        /* ******************** Zaal 4 ******************** */
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        
    }
}

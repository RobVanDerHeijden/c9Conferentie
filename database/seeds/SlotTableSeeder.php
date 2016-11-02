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
        $slot->idStatus = 3;
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
        $slot->idStatus = 2;
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
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        /* ******************** Zaal 3 ******************** */
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 2;
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
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 2;
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
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Vrijdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 2;
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
        
        
        
        /* ******************** Zaterdag ******************** */
        /* ******************** Zaal 1 ******************** */
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "10:15";
        $slot->eindTijd = "11:15";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "11:30";
        $slot->eindTijd = "12:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "13:00";
        $slot->eindTijd = "14:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "14:15";
        $slot->eindTijd = "15:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        /* ******************** Zaal 2 ******************** */
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "10:15";
        $slot->eindTijd = "11:15";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "11:30";
        $slot->eindTijd = "12:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "13:00";
        $slot->eindTijd = "14:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "14:15";
        $slot->eindTijd = "15:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        /* ******************** Zaal 3 ******************** */
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "10:15";
        $slot->eindTijd = "11:15";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "11:30";
        $slot->eindTijd = "12:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "13:00";
        $slot->eindTijd = "14:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "14:15";
        $slot->eindTijd = "15:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        /* ******************** Zaal 4 ******************** */
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "10:15";
        $slot->eindTijd = "11:15";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "11:30";
        $slot->eindTijd = "12:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "13:00";
        $slot->eindTijd = "14:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "14:15";
        $slot->eindTijd = "15:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "15:30";
        $slot->eindTijd = "16:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "16:45";
        $slot->eindTijd = "17:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "18:45";
        $slot->eindTijd = "19:45";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "20:00";
        $slot->eindTijd = "21:00";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "21:30";
        $slot->eindTijd = "22:30";
        $slot->dag = "Zaterdag";
        $slot->save();
        
        
        
        /* ******************** Zondag ******************** */
        /* ******************** Zaal 1 ******************** */
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "12:15";
        $slot->eindTijd = "13:15";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "13:30";
        $slot->eindTijd = "14:30";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "15:00";
        $slot->eindTijd = "16:00";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 1;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:15";
        $slot->eindTijd = "17:15";
        $slot->dag = "Zondag";
        $slot->save();
        
        /* ******************** Zaal 2 ******************** */
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "12:15";
        $slot->eindTijd = "13:15";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "13:30";
        $slot->eindTijd = "14:30";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "15:00";
        $slot->eindTijd = "16:00";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 2;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:15";
        $slot->eindTijd = "17:15";
        $slot->dag = "Zondag";
        $slot->save();
        
        /* ******************** Zaal 3 ******************** */
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "12:15";
        $slot->eindTijd = "13:15";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "13:30";
        $slot->eindTijd = "14:30";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "15:00";
        $slot->eindTijd = "16:00";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 3;
        $slot->idStatus = 3;
        $slot->agenda = 1;
        $slot->beginTijd = "16:15";
        $slot->eindTijd = "17:15";
        $slot->dag = "Zondag";
        $slot->save();
        
        /* ******************** Zaal 4 ******************** */
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "12:15";
        $slot->eindTijd = "13:15";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "13:30";
        $slot->eindTijd = "14:30";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 2;
        $slot->agenda = 1;
        $slot->beginTijd = "15:00";
        $slot->eindTijd = "16:00";
        $slot->dag = "Zondag";
        $slot->save();
        
        $slot = new Slot();
        $slot->idZaal = 4;
        $slot->idStatus = 1;
        $slot->agenda = 1;
        $slot->beginTijd = "16:15";
        $slot->eindTijd = "17:15";
        $slot->dag = "Zondag";
        $slot->save();
    }
}

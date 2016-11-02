@extends('layouts.master')
@section('content')

<div class="container">
    <div class="col-lg-12">
        <h4>Agenda</h4>
    </div>
        <?php $aantalZaals = DB::table('zaals')->get(); ?>
        <?php $agendaSlotStatus = "slot_status_open"; ?>
        <?php $statusText = "" ?>
        
    <!-- Vrijdag -->
    <div class="col-lg-12">
        <h2><center>Vrijdag</center></h2>
        <?php $vrijdagQuery = DB::table('slots')->where('dag', "Vrijdag")->get(); ?>
        <?php $vrijdagZaal1 = DB::table('slots')->where([['dag', 'Vrijdag'],['idZaal',  '1'],])->get(); ?>
        <?php $countPerZaal = count($vrijdagZaal1); ?>
        <?php $x = 0; ?>
        
        <table border='1px' width=100%>
            <tr>
                <td></td>
                @foreach($aantalZaals as $zaal)
                    <td>{{ $zaal->zaalnaam }}</td>
                @endforeach
            </tr>
            @foreach($vrijdagZaal1 as $vrijdagSlot)
                <tr>
                    <td>{{ $vrijdagSlot->beginTijd }} - {{ $vrijdagSlot->eindTijd }}</td>
                    <?php 
                        $statusText = DB::table('statuses')->where('idStatus', $vrijdagQuery[$x]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $vrijdagQuery[$x]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";

                        if($vrijdagQuery[$x]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($vrijdagQuery[$x]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($vrijdagQuery[$x]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                        
                    ?>
                    <?php if(isset($bezetSlot->omschrijving)) { $bezetSlot->omschrijving; } ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $vrijdagQuery[$x]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $vrijdagQuery[$x+($countPerZaal*1)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $vrijdagQuery[$x+($countPerZaal*1)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($vrijdagQuery[$x+($countPerZaal*1)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($vrijdagQuery[$x+($countPerZaal*1)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($vrijdagQuery[$x+($countPerZaal*1)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $vrijdagQuery[$x+($countPerZaal*1)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $vrijdagQuery[$x+($countPerZaal*2)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $vrijdagQuery[$x+($countPerZaal*2)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($vrijdagQuery[$x+($countPerZaal*2)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($vrijdagQuery[$x+($countPerZaal*2)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($vrijdagQuery[$x+($countPerZaal*2)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $vrijdagQuery[$x+($countPerZaal*2)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $vrijdagQuery[$x+($countPerZaal*3)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $vrijdagQuery[$x+($countPerZaal*3)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($vrijdagQuery[$x+($countPerZaal*3)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($vrijdagQuery[$x+($countPerZaal*3)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($vrijdagQuery[$x+($countPerZaal*3)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $vrijdagQuery[$x+($countPerZaal*3)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                </tr>
                <?php $x = $x + 1; ?>
            @endforeach
        </table>    
    </div>
    
    <!-- Zaterdag -->
    <div class="col-lg-12">
        <h2><center>Zaterdag</center></h2>
        <?php $zaterdagQuery = DB::table('slots')->where('dag', "Zaterdag")->get(); ?>
        <?php $zaterdagZaal1 = DB::table('slots')->where([['dag', 'Zaterdag'],['idZaal',  '1'],])->get(); ?>
        <?php $countPerZaal = count($zaterdagZaal1); ?>
        <?php $x = 0; ?>
        
        <table border='1px' width=100%>
            <tr>
                <td></td>
                @foreach($aantalZaals as $zaal)
                    <td>{{ $zaal->zaalnaam }}</td>
                @endforeach
            </tr>
            @foreach($zaterdagZaal1 as $zaterdagSlot)
                <tr>
                    <td>{{ $zaterdagSlot->beginTijd }} - {{ $zaterdagSlot->eindTijd }}</td>
                    <?php 
                        $statusText = DB::table('statuses')->where('idStatus', $zaterdagQuery[$x]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zaterdagQuery[$x]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zaterdagQuery[$x]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zaterdagQuery[$x]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zaterdagQuery[$x]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zaterdagQuery[$x]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $zaterdagQuery[$x+($countPerZaal*1)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zaterdagQuery[$x+($countPerZaal*1)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zaterdagQuery[$x+($countPerZaal*1)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zaterdagQuery[$x+($countPerZaal*1)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zaterdagQuery[$x+($countPerZaal*1)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zaterdagQuery[$x+($countPerZaal*1)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $zaterdagQuery[$x+($countPerZaal*2)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zaterdagQuery[$x+($countPerZaal*2)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zaterdagQuery[$x+($countPerZaal*2)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zaterdagQuery[$x+($countPerZaal*2)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zaterdagQuery[$x+($countPerZaal*2)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zaterdagQuery[$x+($countPerZaal*2)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $zaterdagQuery[$x+($countPerZaal*3)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zaterdagQuery[$x+($countPerZaal*3)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zaterdagQuery[$x+($countPerZaal*3)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zaterdagQuery[$x+($countPerZaal*3)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zaterdagQuery[$x+($countPerZaal*3)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zaterdagQuery[$x+($countPerZaal*3)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                </tr>
                <?php $x = $x + 1; ?>
            @endforeach
        </table>    
    </div>
    
    <!-- Zondag -->
    <div class="col-lg-12">
        <h2><center>Zondag</center></h2>
        <?php $zondagQuery = DB::table('slots')->where('dag', "Zondag")->get(); ?>
        <?php $zondagZaal1 = DB::table('slots')->where([['dag', 'Zondag'],['idZaal',  '1'],])->get(); ?>
        <?php $countPerZaal = count($zondagZaal1); ?>
        <?php $x = 0; ?>
        
        <table border='1px' width=100%>
            <tr>
                <td></td>
                @foreach($aantalZaals as $zaal)
                    <td>{{ $zaal->zaalnaam }}</td>
                @endforeach
            </tr>
            @foreach($zondagZaal1 as $zondagSlot)
                <tr>
                    <td>{{ $zondagSlot->beginTijd }} - {{ $zondagSlot->eindTijd }}</td>
                    <?php 
                        $statusText = DB::table('statuses')->where('idStatus', $zondagQuery[$x]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zondagQuery[$x]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zondagQuery[$x]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zondagQuery[$x]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zondagQuery[$x]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zondagQuery[$x]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $zondagQuery[$x+($countPerZaal*1)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zondagQuery[$x+($countPerZaal*1)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zondagQuery[$x+($countPerZaal*1)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zondagQuery[$x+($countPerZaal*1)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zondagQuery[$x+($countPerZaal*1)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zondagQuery[$x+($countPerZaal*1)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $zondagQuery[$x+($countPerZaal*2)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zondagQuery[$x+($countPerZaal*2)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zondagQuery[$x+($countPerZaal*2)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zondagQuery[$x+($countPerZaal*2)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zondagQuery[$x+($countPerZaal*2)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zondagQuery[$x+($countPerZaal*2)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                    <?php
                        $statusText = DB::table('statuses')->where('idStatus', $zondagQuery[$x+($countPerZaal*3)]->idStatus)->get();
                        $bezetSlot = DB::table('aanmeldings')->where([['idSlot', $zondagQuery[$x+($countPerZaal*3)]->id],['status', 'Geaccepteerd']])->first();
                        $omschrijving = "";
                        
                        if($zondagQuery[$x+($countPerZaal*3)]->idStatus == 1) { $agendaSlotStatus = "slot_status_open"; } 
                        elseif ($zondagQuery[$x+($countPerZaal*3)]->idStatus == 2) { $agendaSlotStatus = "slot_status_onder_voorbehoud"; } 
                        elseif ($zondagQuery[$x+($countPerZaal*3)]->idStatus == 3) { $agendaSlotStatus = "slot_status_bezet"; $omschrijving = $bezetSlot->onderwerp . " | " . $bezetSlot->omschrijving; }
                    ?>
                    <td class= {{ $agendaSlotStatus }}>ID: {{ $zondagQuery[$x+($countPerZaal*3)]->id }} {{ $statusText[0]->status }} | {{ $omschrijving }} </td>
                </tr>
                <?php $x = $x + 1; ?>
            @endforeach
        </table>    
    </div>
    
</div> <!-- /container -->
@endsection
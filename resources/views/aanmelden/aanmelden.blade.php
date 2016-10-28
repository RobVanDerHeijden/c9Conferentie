@extends('layouts.master')
@section('content')
<?php $sloten1 = DB::table('slots')->where('idStatus', 1)->get(); ?>
<?php $slotenVoorkeur = DB::table('slots')->where('idStatus', 2)->get(); ?>
<form  method="post" action='{{route('postaanmelding')}}' id='reserveren'>
    <div class ="input-group col-md-12">
        @include('includes.info-box')
        <table>
            <tr>
                <td><label for="slot">Slot: </label></td>
                <td>
                    <select name="slot1" class="slot1">
                        @foreach($sloten1 as $slot)
                            <option value="{{ $slot->id }}">{{ $slot->dag }} : {{ $slot->beginTijd }} - {{ $slot->eindTijd }} Zaal[{{ $slot->idZaal }}]</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><label for="slot2">Slot voorkeur: </label></td>
                <td>
                    <select name="slot-voorkeur" class="slot-voorkeur">
                        <option value="">Geen voorkeur</option>
                        @foreach($slotenVoorkeur as $slotVoorkeur)
                            <option value="{{ $slotVoorkeur->id }}">{{ $slotVoorkeur->dag }} : {{ $slotVoorkeur->beginTijd }} - {{ $slotVoorkeur->eindTijd }} Zaal[{{ $slotVoorkeur->idZaal }}]</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            
            <tr>
                <td><label for="onderwerp">onderwerp: </label></td>
                <td><input type="text" name="onderwerp" id="onderwerp" placeholder="je onderwerp"/></td>
            </tr>
            
            <tr>
                <td><label for="omschrijving">omschrijving: </label></td>
                <td><input type="text" name="omschrijving" id="omschrijving" placeholder="je omschrijving"/></td>
            </tr>
            
            <tr>
                <td><label for="wensen">wensen: </label></td>
                <td><input type="text" name="wensen" id="wensen" placeholder="je wensen"/></td>
            </tr>
            
            <tr>
                <td><label for="naam">Voornaam: </label></td>
                <td><input type="text" name="naam" id="naam" placeholder="je naam"/></td>
            </tr>
            
            <tr>
                <td><label for="tussenvoegsel">Tussenvoegsel: </label></td>
                <td><input type="text" name="tussenvoegsel" id="tussenvoegsel" placeholder="tussenvoegsel"/></td>
            </tr>
            
            <tr>
                <td><label for="achternaam">Achternaam: </label></td>
                <td><input type="text" name="achternaam" id="achternaam" placeholder="achternaam"/></td>
            </tr>
            
            <tr>
                <td><label for="email">Email: </label></td>
                <td><input type="text" name="email" id="email" placeholder="email"/></td>
            </tr>
            
            <tr>
                <td><label for="telnummer">Telnummer: </label></td>
                <td><input type="text" name="telnummer" id="telnummer" placeholder="telnummer"/></td>
            </tr>
            
            <tr>
                <td><label for="adres">Adres: </label></td>
                <td><input type="text" name="adres" id="adres" placeholder="adres"/></td>
            </tr>
            
            <tr>
                <td><label for="woonplaats">Woonplaats: </label></td>
                <td><input type="text" name="woonplaats" id="woonplaats" placeholder="woonplaats"/></td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td></td>
            </tr>
            
            <tr>
                <td>Indien gewenst kan je kosten vragen.</td>
                <td></td>
            </tr>
            
            <tr>
                <td><label for="kosten">Kosten (tussen 0 and 25000):</label></td>
                <td><input type="number" name="kosten" min="0" max="25000" step="0.01"></td>
            </tr>

            <tr>
                <td><button type="submit" class="btn">Bevestigen</button></td>
                <td></td>
            </tr>

            <tr>
                <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
                <td></td>
            </tr>
        </table>
    </div>
</form>
    
@endsection
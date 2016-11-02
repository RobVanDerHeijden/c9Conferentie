@extends('layouts.master')
@section('content')
<?php $aanmeldingen = DB::table('aanmeldings')->get(); ?>
<div class="row marketing">
    @include('includes.info-box')
    <div class="col-lg-6">
        <h2>Aanvragen beoordelen</h2>
        <hr class="lijnsplit">
        <h3>Accepteren</h3>
        <form  method="post" action='{{route('postacceptaanmelding')}}' id='reserveren'>
            <table>
                <tr>
                    <td>Aanmeldingen:</td>
                    <td>
                        <select name="aanmelding" class="aanmelding">
                            @foreach($aanmeldingen as $aanmelding)
                                <?php $aanvraagUser = DB::table('users')->where('id', $aanmelding->idUser)->get(); ?>
                                <?php $slotStatus = DB::table('slots')->where('id', $aanmelding->idSlot)->get(); ?>
                                @if ($slotStatus[0]->idStatus == 2 && $aanmelding->status != 'Geaccepteerd')
                                    <option value="{{ $aanmelding->idAanmelding }}">
                                        IDslot: {{ $aanmelding->idSlot }} 
                                        Naam:{{ $aanvraagUser[0]->naam }} - 
                                        Kosten: {{ $aanmelding->kosten }}
                                        Onderwerp:{{ $aanmelding->onderwerp }}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
                </tr>
                <!--<tr>
                    <td><button type="submit" class="btn">Bevestigen</button></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
                    <td></td>
                </tr>-->
            </table>
            <?php $tags = DB::table('tags')->get(); ?>
            <table>
                <tr>
                    <td>
                        <select name="tag1" class="tag1">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->idTag }}">TagID:{{ $tag->idTag }} | Tag:{{ $tag->tag }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="tag2" class="tag2">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->idTag }}">TagID:{{ $tag->idTag }} | Tag:{{ $tag->tag }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="tag3" class="tag3">
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->idTag }}">TagID:{{ $tag->idTag }} | Tag:{{ $tag->tag }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td><button type="submit" class="btn">Bevestigen</button></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
                    <td></td>
                </tr>
            </table>
        </form>
        
        <h3>Verwerpen</h3>
        <form  method="post" action='{{route('postdeclineaanmelding')}}' id='reserveren'>
            <table>
                <tr>
                    <td>Aanmeldingen:</td>
                    <td>
                        <select name="aanmelding" class="aanmelding">
                            @foreach($aanmeldingen as $aanmelding)
                                <?php $aanvraagUser = DB::table('users')->where('id', $aanmelding->idUser)->get(); ?>
                                <?php $slotStatus = DB::table('slots')->where('id', $aanmelding->idSlot)->get(); ?>
                                @if ($slotStatus[0]->idStatus == 2 && $aanmelding->status != 'Geaccepteerd')
                                    <option value="{{ $aanmelding->idSlot }}">IDslot: {{ $aanmelding->idSlot }} Naam:{{ $aanvraagUser[0]->naam }} - Onderwerp:{{ $aanmelding->onderwerp }}</option>
                                @endif
                            @endforeach
                        </select>
                    </td>
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
        </form>
        
        
        <hr class="lijnsplit">
    </div>
    
    

    <!-- Database gegevens voor deze tabel -->
    <?php $openstaandeKosten = DB::table('aanmeldings')->where([
        ['kosten', '>', 0], 
        ['status', ""]
    ])->get(); ?>
    <?php $uitgegevenKosten = DB::table('aanmeldings')->where('status', "Geaccepteerd")->get(); ?>

    <?php $totaalOpenstaand = 0; ?>
    <?php $totaalUitgegeven = 0; ?>
    <?php $budget = DB::table('sprekerskostens')->first(); ?>

    <div class="col-lg-6">
        <h2>Budget Overzicht</h2>
        <hr class="lijnsplit">
        
        <h3>Openstaande aanmeldingen</h3>
        <hr>
        <form method="post" action='{{route('postTegenbod')}}' id='reserveren'>
            <table>
                <tr>
                    <th>User ID</th>
                    <th>Naam</th>
                    <th>Gevraagde Kosten</th>
                    <th>Bied tegenbod</th>
                </tr>
                <?php $x = 0; ?>
                @foreach($openstaandeKosten as $aanmelding)
                    <?php $naamUserAanmelding = DB::table('users')->where('id', $aanmelding->idUser)->first(); ?>
                    <tr>
                        <td value={{$aanmelding->idUser}}>{{$aanmelding->idUser}}</td>
                        <td>{{ $naamUserAanmelding->naam }}</td>
                        <td>{{ $aanmelding->kosten }}</td>
                        <td><input type="radio" id="watch-me{{$x}}" class="show" name="idUser" value="{{$aanmelding->idUser}}"></td>
                    </tr>
                    <?php $totaalOpenstaand = $totaalOpenstaand + $aanmelding->kosten ?>
                    <?php $x = $x + 1; ?>
                @endforeach
                <tr>
                    <td>Openstaand totaal:</td>
                    <td><input type="text" name="openstaandTotaal" class="openstaandTotaal" value={{ $totaalOpenstaand }} readonly></td>
                </tr>
                <tr>
                    <td><input type="number" id="show-me{{$x}}" name="nieuweKosten" min="0" max="25000" step="0.01"></td>
                    <td><button type="submit" class="btn">Bevestigen</button></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
                    <td></td>
                </tr>
            </table>
        </form>
        
        <hr class="lijnsplit">
        <h3>Uitgegeven aanmeldingen</h3>
        <hr>
        <table>
            <tr>
                <th>User ID</th>
                <th>Naam</th>
                <th>Onderwerp</th>
                <th>Bedrag</th>
            </tr>
            @foreach ($uitgegevenKosten as $uitgegevenAanmelding)
                <?php $naamUserAanmelding = DB::table('users')->where('id', $uitgegevenAanmelding->idUser)->first(); ?>
                <tr>
                    <td>{{ $uitgegevenAanmelding->idUser }}</td>
                    <td>{{ $naamUserAanmelding->naam }}</td>
                    <td>{{ $uitgegevenAanmelding->onderwerp }}</td>
                    <td>{{ $uitgegevenAanmelding->kosten }}</td>
                </tr>
                <?php $totaalUitgegeven = $totaalUitgegeven + $uitgegevenAanmelding->kosten ?>
            @endforeach
            <tr>
                <td>Budget uitgegeven:</td>
                <td><input type="text" name="openstaandTotaal" class="uitgegevenTotaal" value={{ $totaalUitgegeven }} readonly></td>
            </tr>
            <tr>
                <td>Budget over:</td>
                <td><input type="text" name="openstaandTotaal" class="overTotaal" value={{ $budget->budget }} readonly></td>
            </tr>
        </table>
        <hr class="lijnsplit">
    </div>
</div>
@endsection
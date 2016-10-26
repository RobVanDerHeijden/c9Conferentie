@extends('layouts.master')
@section('content')

<?php $aanmeldingen = DB::table('aanmeldings')->get(); ?>

@include('includes.info-box')
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
                        @if ($slotStatus[0]->idStatus == 2)
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
                        @if ($slotStatus[0]->idStatus == 2)
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
@endsection
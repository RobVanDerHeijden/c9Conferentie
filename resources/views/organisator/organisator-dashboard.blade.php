@extends('layouts.master')
@section('content')

<?php $aanmeldingen = DB::table('aanmeldings')->get(); ?>

<h3>Aanvragen</h3>
<form  method="post" action='{{route('postacceptaanmelding')}}' id='reserveren'>
    <table>
        <tr>
            <td>Aanmeldingen:</td>
            <td>
                <select name="aanmelding" class="aanmelding">
                    @foreach($aanmeldingen as $aanmelding)
                        <?php $aanvraagUser = DB::table('users')->where('id', $aanmelding->idUser)->get(); ?>
                        <option value="{{ $aanmelding->idSlot }}">ID: {{ $aanmelding->idAanmelding }} Naam:{{ $aanvraagUser[0]->naam }} - Onderwerp:{{ $aanmelding->onderwerp }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><button type="submit" class="btn">Bevestigen</button></td>
            <td>@include('includes.info-box')</td>
        </tr>

        <tr>
            <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
            <td></td>
        </tr>
    </table>
</form>
@endsection
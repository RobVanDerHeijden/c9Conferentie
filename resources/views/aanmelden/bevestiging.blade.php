@extends('layouts.master')
@section('content')
aanmelden bevestiging<br>
<?php
    $naam = "";
    $aanmelding = "";
    if(isset($_GET["naam"]) && isset($_GET["aanmelding"]))
    {
        $naam = $_GET["naam"];
        $aanmelding = $_GET["aanmelding"];
    }
?>

<form method="post" action='{{route('postAcceptTegenbod')}}' id='reserveren'>
    <table>
        <tr>
            <td>Naam:</td>
            <td>{{ $naam }}</td>
        </tr>
        <tr>
            <td>Weet u zeker dat u de nieuwe prijs wilt accepteren?</td>
            <td><button type="submit" class="btn">Bevestigen</button></td>
        </tr>
        <tr>
            <td><input type="hidden" name="naam" value="{{ $naam }}"></td>
            <td><input type="hidden" name="aanmeldingsId" value="{{ $aanmelding }}"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
            <td></td>
        </tr>
    </table>
</form>
@endsection
@extends('layouts.master')
@section('content')
<h2>>Reservering afzeggen</h2><br>
<?php
    $reserveringNr = "";
    if(isset($_GET["reserveringNr"]))
    {
        $reserveringNr = $_GET["reserveringNr"];
    }
?>
<?php $tickets = DB::table('tickets')->where('reservering', $reserveringNr)->get(); ?>
<?php $maaltijden = DB::table('maaltijds')->where('reservering', $reserveringNr)->get(); ?>
<form method="post" action='{{route('afzegReservering')}}' id='reserveren'>
    <table>
        <tr>
            <td>ReserveringNr:</td>
            <td>{{ $reserveringNr }}</td>
        </tr>
        <tr>
            <td>Tickets</td>
        </tr>
        @foreach ($tickets as $ticket)
            <?php $soort = DB::table('ticketsoorts')->where('id', $ticket->soort)->first(); ?>
            <tr>
                <td>Soort ticket: {{ $soort->soort }}</td>
                <td><input type="radio" class="show" name="idTicket" value="{{ $ticket->id }}"></td>
            </tr>
        @endforeach
        <tr>
            <td>Maaltijden</td>
        </tr>
        @foreach ($maaltijden as $maaltijd)
            <?php $soort = DB::table('maaltijdsoorts')->where('id', $maaltijd->soort)->first(); ?>
            <tr>
                <td>Soort maaltijd: {{ $soort->soort }}</td>
                <td><input type="radio" class="show" name="idMaaltijd" value="{{ $maaltijd->id }}"></td>
            </tr>
        @endforeach
        <tr>
            <td>Weet u zeker dat u het geselecteerde wilt afzeggen?</td>
            <td><button type="submit" class="btn">Bevestigen</button></td>
        </tr>
        <tr>
            <td><input type="hidden" name="reserveringNr" value="{{ $reserveringNr }}"></td>
            <td></td>
        </tr>
        <tr>
            <td><input type="hidden" name="_token" value="{{ Session::token() }}"/></td>
            <td></td>
        </tr>
    </table>
</form>
@endsection
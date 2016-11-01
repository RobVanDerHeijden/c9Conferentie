<?php $reserveringNr = DB::table('reserverings')->max('id'); ?>
<?php $totalMaaltijden = DB::table('maaltijds')->where('reservering', $reserveringNr)->get(); ?>
<?php $reservering = DB::table('reserverings')->where('id', $reserveringNr)->get(); ?>
<?php $userId = DB::table('users')->where('id', $reservering[0]->idUser)->get(); ?>
Beste <u>{{ $userId[0]->naam }}</u>.<br>
<br>
U heeft een reservering gemaakt op Conferentie - ICT.<br>
<br>
Uw bestelling is bevestigd!<br>
<br>
<div style="background-color:rgba(216, 216, 216, 0.5);">
    Reservering nr: {{ $reserveringNr }}<br>
    User nr: {{ $reservering[0]->idUser }}<br>
    <br>
    <strong>Uw tickets:</strong><br>
    <!-- Tabel informatie tickets -->
    <table width="400" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Nr.</td>
            <td>Soort ticket</td>
            <td>Prijs ticket</td>
        </tr>
        <?php $nrTicket = 1; $totaalPrijsTickets = 0; ?>
        @foreach ($tickets as $ticket)
            <?php $ticketSoort = DB::table('ticketsoorts')->where('id', $ticket->soort)->get(); ?>
            <tr>
                <td>{{ $nrTicket }}</td>
                <td>{{ $ticketSoort[0]->soort }}</td>
                <td>€ {{ $ticketSoort[0]->prijs }}</td>
            </tr>
            <?php 
                $nrTicket = $nrTicket + 1; 
                $totaalPrijsTickets = $totaalPrijsTickets + $ticketSoort[0]->prijs; 
            ?>
        @endforeach
        <tr>
            <td colspan="2">Totaal Tickets:</td>
            <td><strong>€ {{ $totaalPrijsTickets }}</strong></td>
        </tr>
    </table><br>
    <br>
    <strong>Uw maaltijden:</strong><br>
    <!-- Tabel informatie maaltijden -->
    <table width="400" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Nr.</td>
            <td>Soort maaltijd</td>
            <td>Prijs maaltijd</td>
        </tr>
        <?php $nrMaaltijd = 1; $totaalPrijsMaaltijden = 0; ?>
        <?php $barcodes = ""; ?>
        <?php $qrCodes = array(); ?>
        @foreach ($totalMaaltijden as $maaltijd)
            <?php $maaltijdSoort = DB::table('maaltijdsoorts')->where('id', $maaltijd->soort)->get(); ?>
            <?php $maaltijdPrijs = $maaltijdSoort[0]->prijs ?>
            <?php if ($maaltijd->vegetarisch == "Ja") {
              $maaltijdPrijs = $maaltijdPrijs * 0.9;  
            }
            ?>
            <tr>
                <td>{{ $nrMaaltijd }}</td>
                <td>{{ $maaltijdSoort[0]->soort }}</td>
                <td>€ {{ $maaltijdPrijs }}</td>
            </tr>
            <?php 
                $totaalPrijsMaaltijden = $totaalPrijsMaaltijden + $maaltijdPrijs;
                $nrMaaltijd = $nrMaaltijd + 1; 
                $barcodes = $barcodes . $maaltijd->barcode . "  ";
            ?>
        @endforeach
        <tr>
            <td colspan="2">Totaal Maaltijden:</td>
            <td><strong>€ {{ $totaalPrijsMaaltijden }}</strong></td>
        </tr>
    </table><br>
    <br>
    
    <table width="400" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td colspan="2">Totaal Tickets:</td>
            <td>€ {{ $totaalPrijsTickets }}</td>
        </tr>
        <tr>
            <td colspan="2">Totaal Maaltijden:</td>
            <td>€ {{ $totaalPrijsMaaltijden }}</td>
        </tr>
        <tr>
            <td colspan="2">Totaal Reservering:</td>
            <td><strong>€ {{ $totaalPrijsTickets + $totaalPrijsMaaltijden }}</strong></td>
        </tr>
    </table>
    @foreach($tickets as $ticket)
        <?php $newCode = $ticket->barcode ?>
    
        <div class="visible-print text-center" style="align:left">
            <p>Barcode :</p>
            {!! QrCode::size(100)->generate("Uw barcode is:" . $newCode ); !!}
        </div>
    @endforeach
</div>
<br>
Hartelijk dank voor uw bestelling <u>{{ $userId[0]->naam }}</u>, wij wensen u een plezierige conferentie toe!<br>
<br>
Mvg,<br>
Bunky™ corp.

U heeft een reservering gemaakt op Conferentie - ICT.<br />
<br />
Uw bestelling is bevestigd!<br>
<br>
<div style="background-color:rgba(216, 216, 216, 0.5);">
    <?php $test = DB::table('reserverings')->max('id'); ?>
    <strong>Uw tickets:</strong><br>
    <br>
    <table width="350" border="1" cellspacing="0" cellpadding="2">
        <tr>
            <td>Nr.</td>
            <td>Soort</td>
            <td>Prijsticket</td>
            <td>Maaltijd</td>
            <td>Prijsmaaltijd</td>
            <td>Totaal</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Zaterdag</td>
            <td>50</td>
            <td>Diner</td>
            <td>30</td>
            <td>80</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Zondag</td>
            <td>30</td>
            <td>Combo</td>
            <td>50</td>
            <td>80</td>
        </tr>
    </table>
</div>
<?php echo $test; ?>
<br>
Mvg,<br>
Bunky™ corp.
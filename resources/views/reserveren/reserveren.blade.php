@extends('layouts.master')
@section('content')
<script>
    
    $(function(){
        
        var d = new Date();
        var month = d.getMonth()+1;
        var day = d.getDate();
        var output = ((''+day).length<2 ? '0' : '')+day+'/'+((''+month).length<2 ? '0' : '')+month+'/'+d.getFullYear();
        var vroegboekkortingCheck = 1;
        var laatstaMaand = 11;
        
        /* ************************ Algemene functies ************************ */
        /* Verander functie voor change Values van totale prijzen */
        function changeValues() {
            var sumMeals = 0;
            $('.priceMaaltijd').each(function(i, obj) {
                sumMeals += $(this).val()*1;
            });
            var sumTickets = 0;
            $('.price').each(function(i, obj) {
                sumTickets += $(this).val()*1;
            });

            document.getElementById("totaalTicket").value = sumTickets;
            document.getElementById("totaalMaaltijd").value = sumMeals;
            if (d.getFullYear() <= 2016 && month <= laatstaMaand && day <= 16) {
            	//alert(output);
                vroegboekkortingCheck = 0.8;
                
                $(".bespaarKorting").val((sumMeals + sumTickets) * 0.2);
            }
            
            document.getElementById("totaalReservering").value = (sumMeals + sumTickets) * vroegboekkortingCheck;
        }
        /* ************************ Ticket ************************ */
        /* Add row ticket */
        $('.addticket').click(function(){
            var ticket = $('.ticket').html();
            var maaltijd = $('.maaltijd').html();
            var n = ($('.body_ticket tr').length-0)+1;
            
            var newTicketRow = '<tr><th class="no">'+ n +'</th>' +
                '<td><select name="ticket[]" class="ticket">'+ ticket +'</select></td>' + 
        		'<td><input type="text" name="price[]" class="price" value="45" readonly></td>' + 
        		'<td><a href="#" class="btn btn-danger delete">verwijder</a></td></tr>';
            $('.body_ticket').append(newTicketRow);	
            
            changeValues();
        });
    
        /* Delete selected row ticket */
        $(".body_ticket").delegate(".delete", "click", function() {
            $(this).parent().parent().remove();
            
            changeValues();
        });
        
        /* Change value depending on type Ticket */
        $('.body_ticket').delegate(".ticket", "change", function() {
            var newTicketRow = $(this).parent().parent();
            var prijs = newTicketRow.find(".ticket option:selected").attr("ticket-prijs");
            newTicketRow.find(".price").val(prijs);

            changeValues();
        });
        
        
        /* ************************ Maaltijd ************************ */
        /* Add row maaltijd Vrijdag */
        $('.addmaaltijdVrijdag').click(function(){
            var maaltijd = $('.maaltijd').html();
            var n = ($('.body_maaltijd tr').length-0)+1;
            var newTicketRow = '<tr><th class="no">'+ n +'</th>' +
                '<td><input type="text" name="dagMaaltijd[]" class="dagMaaltijd" value="Vrijdag" readonly></td>' +
        		'<td><select name="maaltijd[]" class="maaltijd">' + 
        		'<option maaltijd-prijs="{{ $maaltijden[0]->prijs }}" value="{{ $maaltijden[0]->id }}">{{ $maaltijden[0]->soort }}</option></select></td>' + 
        		'<td><input type="hidden" name="vegetarisch[]" value="Nee" /> <input type="checkbox" id="vegetarisch" class="vegetarischCheck" name="vegetarisch[]" value="Ja" style="width:25px;height:25px"></td>' +
            	'<td><input type="text" name="priceMaaltijd[]" class="priceMaaltijd" value="20" readonly></td>' + 
        		'<td><a href="#" class="btn btn-danger delete">verwijder</a></td></tr>';
            $('.body_maaltijd').append(newTicketRow);
            
            changeValues();
        });
        
        /* Add row maaltijd Zaterdag */
        $('.addmaaltijdZaterdag').click(function(){
            var maaltijd = $('.maaltijd').html();
            var n = ($('.body_maaltijd tr').length-0)+1;
            var newTicketRow = '<tr><th class="no">'+ n +'</th>' +
            '<td><input type="text" name="dagMaaltijd[]" class="dagMaaltijd" value="Zaterdag" readonly></td>' +
        		'<td><select name="maaltijd[]" class="maaltijd">@foreach($maaltijden as $maaltijd)' + 
        		'<option maaltijd-prijs="{{ $maaltijd->prijs }}" value="{{ $maaltijd->id }}">{{ $maaltijd->soort }}</option>@endforeach</select></td>' + 
        		'<td><input type="hidden" name="vegetarisch[]" value="Nee" /> <input type="checkbox" id="vegetarisch" class="vegetarischCheck" name="vegetarisch[]" value="Ja" style="width:25px;height:25px"></td>' +
            	'<td><input type="text" name="priceMaaltijd[]" class="priceMaaltijd" value="20" readonly></td>' + 
        		'<td><a href="#" class="btn btn-danger delete">verwijder</a></td></tr>';
            $('.body_maaltijd').append(newTicketRow);
            
            changeValues();
        });
        
        /* Add row maaltijd Zondag */
        $('.addmaaltijdZondag').click(function(){
            var maaltijd = $('.maaltijd').html();
            var n = ($('.body_maaltijd tr').length-0)+1;
            var newTicketRow = '<tr><th class="no">'+ n +'</th>' +
                '<td><input type="text" name="dagMaaltijd[]" class="dagMaaltijd" value="Zondag" readonly></td>' +
        		'<td><select name="maaltijd[]" class="maaltijd">@foreach($maaltijden as $maaltijd)' + 
        		'<option maaltijd-prijs="{{ $maaltijd->prijs }}" value="{{ $maaltijd->id }}">{{ $maaltijd->soort }}</option>@endforeach</select></td>' + 
        		'<td><input type="hidden" name="vegetarisch[]" value="Nee" /> <input type="checkbox" id="vegetarisch" class="vegetarischCheck" name="vegetarisch[]" value="Ja" style="width:25px;height:25px"></td>' +
            	'<td><input type="text" name="priceMaaltijd[]" class="priceMaaltijd" value="20" readonly></td>' + 
        		'<td><a href="#" class="btn btn-danger delete">verwijder</a></td></tr>';
            $('.body_maaltijd').append(newTicketRow);
            
            changeValues();
        });
        
        /* Delete selected row maaltijd */
        $(".body_maaltijd").delegate(".delete", "click", function() {
            $(this).parent().parent().remove();
            
            changeValues();
        });
        
        /* Change value depending on type Maaltijd */
        $('.body_maaltijd').delegate(".maaltijd", "change", function() {
            var newTicketRow = $(this).parent().parent();
            var prijs = newTicketRow.find(".maaltijd option:selected").attr("maaltijd-prijs");
            
            newTicketRow.find(".priceMaaltijd").val(prijs);
            
            changeValues();
        });
        
        /* Change value depending on if Vegetarisch is checked */
        $('.body_maaltijd').delegate(".vegetarischCheck", "change", function() {
            if ($(this).is(':checked')) {
                var newTicketRow = $(this).parent().parent();
                var prijs = newTicketRow.find(".priceMaaltijd").val();
                prijs = prijs * 0.9;
                
                newTicketRow.find(".priceMaaltijd").val(prijs);
                
                changeValues();
                //console.log('Checked');
            } else {
                var newTicketRow = $(this).parent().parent();
                var prijs = newTicketRow.find(".maaltijd option:selected").attr("maaltijd-prijs");
                
                newTicketRow.find(".priceMaaltijd").val(prijs);
                
                changeValues();
                //console.log('Unchecked');
            }
        });
        
        /* Discount actif if ordered 2 months early */
        if (d.getFullYear() <= 2016 && month <= laatstaMaand && day <= 16) {
        	//alert(output);
            $(".vroegboekkorting").val("Actief");
        } else {
            $(".vroegboekkorting").val("Inactief");
        }

    });
    
</script>

<section class="reservering"> 
    <h1> Tickets Reserveren </h1>
    <h5>!!! Ontvang 20% vroegboekkorting als je minstens 2 maanden van tevoren besteld !!!</h5>
    <div class="col-md-6">
        <table>
            <tr><th>Ticket</th>         <th>Prijs in €</th> <th>Beschikbaar</th></tr>
            <tr><td>Vrijdag</td>        <td>€45</td>        <td>{{ DB::table('ticketsoorts')->where('id', 1)->value('beschikbaar') }}</td></tr>
            <tr><td>Zaterdag</td>       <td>€60</td>        <td>{{ DB::table('ticketsoorts')->where('id', 2)->value('beschikbaar') }}</td></tr>
            <tr><td>Zondag</td>         <td>€30</td>        <td>{{ DB::table('ticketsoorts')->where('id', 3)->value('beschikbaar') }}</td></tr>
            <tr><td>Passe-partout</td>  <td>€100</td></tr>
            <tr><td>weekend</td>        <td>€80</td></tr>
        </table>
    </div>
    <div class="col-md-6">
        <table>
            <tr>
                <th>Maaltijd</th>
                <th>Prijs</th>
                <th>Dagen</th>
                <th>Tijdstip</th>
            </tr>
            <tr>
                <td>Lunch</td>
                <td>€20</td>
                <td>Alle dagen</td>
                <td>12:00 - 13:30</td>
            </tr>
            <tr>
                <td>Diner</td>
                <td>€30</td>
                <td>Weekend</td>
                <td>17:30 - 20:00</td>
            </tr>
        </table>
    </div>
    <br>
    <div class="col-md-12">
        <form  method="post" action='{{route('postreserveringarray')}}' id='reserveren'>
            <!-- ******* Ticket ******* -->
            <div class="col-md-6">
                <button type="button" class="btn addticket" value="+">Ticket toevoegen +</button><br>
                <table>
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>Soort ticket</th>
                            <th>Prijs</th>
                        </tr>
                    </thead>
                    <tbody class="body_ticket">
                        <label for="ticket">
                            Kies een ticket: 
                        </label><br>
                        <tr>
                            <th class="no">1</th>
                            <td>
                                <select name="ticket[]" class="ticket">
                                    @foreach($tickets as $ticket)
                                        <option ticket-prijs="{{ $ticket->prijs }}" value="{{ $ticket->id }}">{{ $ticket->soort }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="text" name="price[]" class="price" value="45" readonly>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <!-- ******* Maaltijd ******* -->
            <div class="col-md-6">
                <button type="button" class="btn addmaaltijdVrijdag" value="+">Maaltijd Vrijdag +</button>
                <button type="button" class="btn addmaaltijdZaterdag" value="+">Maaltijd Zaterdag +</button>
                <button type="button" class="btn addmaaltijdZondag" value="+">Maaltijd Zondag +</button><br>
                <table>
                    <thead>
                        <tr>
                            <th>Nr.</th>
                            <th>Dag</th>
                            <th>Soort maaltijd</th>
                            <th>Vegetarisch</th>
                            <th>Prijs</th>
                        </tr>
                    </thead>
                    <tbody class="body_maaltijd">
                        <label for="maaltijd">
                            Kies een maaltijd: 
                        </label><br>
                        <!-- Hier komen de nieuwe rows van maaltijden -->
                    </tbody>
                </table>
            </div>
            
            <div class ="totaaldiv col-md-12">
                <center>
                    <table>
                        <tr>
                            <td><label for="totaal">Totaal ticket: </label></td>
                            <td><input type="text" id="totaalTicket" name="totaalTicket" class="totaalTicket" value="45" readonly></td>
                        </tr>
                        <tr>
                            <td><label for="totaal">Totaal maaltijd: </label></td>
                            <td><input type="text" id="totaalMaaltijd" name="totaalMaaltijd" class="totaalMaaltijd" value="0" readonly></td>
                        </tr>
                        <tr>
                            <td><label for="totaal">Totaal reservering: </label></td>
                            <td><input type="text" id="totaalReservering" name="totaalReservering" class="totaalReservering" value="45" readonly></td>
                        </tr>
                        <tr><td colspan="2"><hr class="lijnsplit"></td></tr>
                        <tr>
                            <td><label for="totaal">Vroegboekkorting van 20%:</label></td>
                            <td><input type="text" id="vroegboekkorting" name="vroegboekkorting" class="vroegboekkorting" value="Inactief" readonly></td>
                        </tr>
                        <tr>
                            <td><label for="totaal">Totale besparing<br></label></td>
                            <td><input type="text" id="bespaarKorting" name="bespaarKorting" class="bespaarKorting" value="0" readonly></td>
                        </tr>
                    </table>
                </center>
            </div>
            
            <div class ="input-group col-md-12">
                <table>
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
                        <td><label for="betaalmethode">Betaalmethode: </label></td>
                        <td>
                            <select name="betaalmethode" id="betaalmethode">
                                <option value="IDeal">IDeal</option>
                                <option value="PayPal">PayPal</option>
                                <option value="Creditcard">Creditcard</option>
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
            </div>
        </form>
    </div>
</section>
@endsection
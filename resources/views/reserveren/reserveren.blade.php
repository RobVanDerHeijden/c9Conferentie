@extends('layouts.master')
@section('content')
<script>
    /*$(function(){
        alert("asdasd");
    });*/
    /*$( document ).ready(function() {
        var newTicketRow = $(this).parent().parent();
        var maaltijd = newTicketRow.find(".priceMaaltijd").val();
        var ticket = newTicketRow.find(".price").val();
        var totaal = parseInt(maaltijd*1) + parseInt(ticket*1);
        newTicketRow.find(".amount").val(totaal);
    });*/
    $(function(){
        $('.add').click(function(){
            var ticket = $('.ticket').html();
            var maaltijd = $('.maaltijd').html();
            var n = ($('.body tr').length-0)+1;
            
            var newTicketRow = '<tr><th class="no">'+ n +'</th>' +
                '<td><select name="ticket[]" class="ticket">'+ ticket +'</select></td>' + 
        		'<td><input type="text" name="price[]" class="price" value="45" readonly></td>' + 
        		'<td><select name="maaltijd[]" class="maaltijd">'+ maaltijd +'</select></td>' + 
            	'<td><input type="text" name="priceMaaltijd[]" class="priceMaaltijd" value="20" readonly></td>' + 
        		'<td><input type="text" name="amount[]" class="amount" value="65" readonly></td>' + 
        		'<td><a href="#" class="btn btn-danger delete">verwijder</a></td></tr>';
            $('.body').append(newTicketRow);		
        });
    
        $(".body").delegate(".delete", "click", function() {
            $(this).parent().parent().remove();
        });
        
        $('.body').delegate(".ticket", "change", function() {
            var newTicketRow = $(this).parent().parent();
            var prijs = newTicketRow.find(".ticket option:selected").attr("ticket-prijs");
            newTicketRow.find(".price").val(prijs);
            
            var maaltijd = newTicketRow.find(".priceMaaltijd").val();
            var ticket = newTicketRow.find(".price").val();
            var totaal = parseInt(maaltijd*1) + parseInt(ticket*1);
            newTicketRow.find(".amount").val(totaal);
        });
        
        $('.body').delegate(".maaltijd", "change", function() {
            var newTicketRow = $(this).parent().parent();
            var prijs = newTicketRow.find(".maaltijd option:selected").attr("maaltijd-prijs");
            newTicketRow.find(".priceMaaltijd").val(prijs);
            
            var maaltijd = newTicketRow.find(".priceMaaltijd").val();
            var ticket = newTicketRow.find(".price").val();
            var totaal = parseInt(maaltijd*1) + parseInt(ticket*1);
            newTicketRow.find(".amount").val(totaal);
        });
        
        $('.body').delegate(".amount", "change", function() {
            var newTicketRow = $(this).parent().parent();
            var maaltijd = newTicketRow.find(".priceMaaltijd").val();
            var ticket = newTicketRow.find(".price").val();
            var totaal = parseInt(maaltijd) + parseInt(ticket);
            newTicketRow.find(".amount").val(totaal);
        });
    });
</script>

<section class="reservering"> 
    <h1> Ticket Reserveren </h1>
    <div class="col-md-6">
        <table>
            <tr>
                <th>Ticket</th><th>Prijs in €</th><th>Beschikbaar</th>
            </tr>
            <tr>
                <td>Vrijdag</td><td>€45</td><td>250</td>
            </tr>
            <tr>
                <td>Zaterdag</td><td>€60</td><td>250</td>
            </tr>
            <tr>
                <td>Zondag</td><td>€30</td><td>250</td>
            </tr>
            <tr>
                <td>Passe-partout</td><td>€100</td>
            </tr>
            <tr>
                <td>weekend</td><td>€80</td>
            </tr>
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
        @include('includes.info-box')
        <button type="button" class="btn add" value="+">Ticket toevoegen +</button>
        <form  method="post" action='{{route('postreserveringarray')}}' id='reserveren'>
            <table>
                <thead>
                    <tr>
                        <th>Nr.</th>
                        <th>Naam</th>
                        <th>Prijs</th>
                        <th>Maaltijd</th>
                        <th>PrijsMaaltijd</th>
                        <th>Totaal</th>
                    </tr>
                </thead>
                <tbody class="body">
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
                        <td>
                            <select name="maaltijd[]" class="maaltijd">
                            @foreach($maaltijden as $maaltijd)
                                <option maaltijd-prijs="{{ $maaltijd->prijs }}" value="{{ $maaltijd->id }}">{{ $maaltijd->soortmaaltijd }}</option>
                            @endforeach
                            </select>
                        </td>
                        <td><input type="text" name="priceMaaltijd[]" class="priceMaaltijd" value="20" readonly></td>
                        <td><input type="text" name="amount[]" class="amount" value="65" readonly></td>
                    </tr>
                </tbody>
            </table>
            
            <div class ="input-group">
                <label for="naam">
                    Voornaam: 
                </label>
                <input type="text" name="naam" id="naam" placeholder="je naam"/>
            </div>
            
            <div class ="input-group">
                <label for="tussenvoegsel">
                    Tussenvoegsel: 
                </label>
                <input type="text" name="tussenvoegsel" id="tussenvoegsel" placeholder="tussenvoegsel"/>
            </div>
            
            <div class ="input-group">
                <label for="achternaam">
                    Achternaam: 
                </label>
                <input type="text" name="achternaam" id="achternaam" placeholder="achternaam"/>
            </div>
            
            <div class ="input-group">
                <label for="email">
                    Email: 
                </label>
                <input type="text" name="email" id="email" placeholder="email"/>
            </div>
            
            <div class ="input-group">
                <label for="telnummer">
                    Telnummer: 
                </label>
                <input type="text" name="telnummer" id="telnummer" placeholder="telnummer"/>
            </div>
            
            <div class ="input-group">
                <label for="adres">
                    Adres: 
                </label>
                <input type="text" name="adres" id="adres" placeholder="adres"/>
            </div>
            
            <div class ="input-group">
                <label for="woonplaats">
                    Woonplaats: 
                </label>
                <input type="text" name="woonplaats" id="woonplaats" placeholder="woonplaats"/>
            </div>
            
            <div class ="input-group">
                <label for="betaalmethode">
                    Betaalmethode: 
                </label>
                <select name="betaalmethode" id="betaalmethode">
                    <option value="IDeal">IDeal</option>
                    <option value="PayPal">PayPal</option>
                    <option value="Creditcard">Creditcard</option>
                </select>
            </div>
            <button type="submit" class="btn">Bevestigen</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}"/>
        </form>
    </div>
</section>
@endsection
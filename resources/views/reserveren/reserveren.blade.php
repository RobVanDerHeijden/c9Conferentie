@extends('layouts.master')
@section('content')

<script>
/*$(function(){
    alert("asdasd");
});*/

    $(function(){
        $('.add').click(function(){
            var ticket = $('.ticket').html();
            var maaltijd = $('.maaltijd').html();
            var n = ($('.body tr').length-0)+1;
            
            var newTicketRow = '<tr><th class="no">'+ n +'</th>' +
                '<td><select name="ticket[]" class="ticket">'+ ticket +'</select></td>' + 
        		'<td><input type="text" name="price[]" class="price form-control"></td>' + 
        		'<td><select name="maaltijd[]" class="maaltijd">'+ maaltijd +'</select></td>' + 
            	'<td><input type="text" name="priceMaaltijd[]" class="priceMaaltijd form-control"></td>' + 
        		'<td><input type="text" name="amount[]" class="amount form-control"></td>' + 
        		'<td><a href="#" class="btn btn-danger delete">verwijder</a></td></tr>';
            $('.body').append(newTicketRow);		
        });
    
        $(".body").delegate(".delete", "click", function() {
            $(this).parent().parent().remove();
        });
    });
    
</script>
<section class="reservering"> 

        <h1> Ticket Reserveren </h1>    
        @include('includes.info-box')
        <button type="button" class="btn add" value="+">+</button>
        <form  method="post" action='{{route('postreservering')}}' id='reserveren'>
            
            <table>
                <tbody class="body">
                    <label for="ticket">
                        Kies een ticket: 
                    </label><br>
                    
                    
                    
                    <tr>
                        <th class="no">1</th>
                        <td><select name="ticket[]" class="ticket">
                        @foreach($tickets as $ticket)
                            <option value="{{ $ticket->id }}">{{ $ticket->soort }}</option>
                        @endforeach
                    </select>
                    </td>
                    <td><input type="text" name="price[]" class="price form-control"></td>
                    <td><select name="maaltijd[]" class="maaltijd">'+ maaltijd +'</select></td>
                    <td><input type="text" name="priceMaaltijd[]" class="priceMaaltijd form-control"></td>
                    <td><input type="text" name="amount[]" class="amount form-control"></td>
                    <td><a href="#" class="btn btn-danger delete">verwijder</a></td></tr>
                    
                    
                    
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
</section>
@endsection
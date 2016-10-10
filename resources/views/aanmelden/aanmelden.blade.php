@extends('layouts.master')
@section('content')
    
    <form action="aanmelden/vervolg.php" method="post">
      <div class ="input-group">
        <label for="naam">
            Voornaam: 
        </label>
        <input type="text" name="naam" id="naam" placeholder="je naam"/>
      </div>
      <div class ="input-group">
        <label for="naam">
            Tussenvoegsel: 
        </label>
        <input type="text" name="naam" id="naam" placeholder="je naam"/>
      </div>
      <div class ="input-group">
        <label for="naam">
            Achternaam: 
        </label>
        <input type="text" name="naam" id="naam" placeholder="je naam"/>
      </div>
      <input type="submit" value="Submit">
    </form>
    
    <br><br><br><br>
    testlinks:<br>
    <a href="/aanmelden/vervolg">vervolg</a><br>
    <a href="/aanmelden/complete">complete</a><br>
    <a href="/aanmelden/bevestiging">beverstiging</a>
@endsection
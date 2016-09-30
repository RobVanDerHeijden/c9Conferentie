@extends('layouts.master')
@section('content')
    
    <form action="aanmelden/vervolg.php" method="post">
      Voornaam:<br>
      <input type="text" name="firstname" value="">
      <br>
      Tussenvoegsel:<br>
      <input type="text" name="firstname" value="">
      <br>
      Achternaam:<br>
      <input type="text" name="lastname" value="">
      <br><br>
      <input type="submit" value="Submit">
    </form>
    
    aanmelden<br>
    <a href="/aanmelden/vervolg">vervolg</a><br>
    <a href="/aanmelden/complete">complete</a><br>
    <a href="/aanmelden/bevestiging">beverstiging</a>
@endsection
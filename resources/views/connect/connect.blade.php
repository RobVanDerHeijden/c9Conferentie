@extends('layouts.master')
@section('content')
<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    //echo "Connected successfullyy (".$db->host_info.")";
    
    $sql = "SELECT id, naam, tussenvoegsel, achternaam, email, telnummer, adres, woonplaats, gebruikersnaam, password, rol FROM users";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
        echo "<table class='testClass'><tr><th>ID</th>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>email</th>
                        <th>telnummer</th>
                        <th>adres</th>
                        <th>woonplaats</th>
                        <th>gebruikersnaam</th>
                        <th>password</th>
                        <th>rol</th></tr>";
        while($row = $result->fetch_assoc()) 
        {
            echo "<tr><td>" . $row["id"] . 
                "</td><td>" . $row["naam"] . 
                "</td><td>". $row["tussenvoegsel"] . 
                "</td><td>" . $row["achternaam"] . 
                "</td><td>" . $row["email"] .
                "</td><td>" . $row["telnummer"] .
                "</td><td>" . $row["adres"] .
                "</td><td>" . $row["woonplaats"] .
                "</td><td>" . $row["gebruikersnaam"] .
                "</td><td>" . $row["password"] .
                "</td><td>" . $row["rol"] .
                "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $db->close();
?>
@endsection
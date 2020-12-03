<?php

function Verstuurd()
{
    $naam = $_GET['naam'];
    $onderwerp = $_GET['onderwerp'];
    $tekst = $_GET['tekst'];
    $email = $_GET['email'];
    isset($naam);
    var_dump($naam);
    if($naam != "niks"){
        echo "<table>
        <thead>
          <tr>
            <th>Naam: </th>
            <th>Email: </th>
            <th>Onderwerp: </th>
            <th>Tekst: </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>" . $naam . "</td>
            <td>" . $email . "</td>
            <td>" . $onderwerp . "</td>
            <td>" . $tekst . "</td>
          </tr>
        </tbody>
      </table>";
    }
}


function SendEmail()
{
    $naam = $_GET['naam'] ?? ' ';
    $onderwerp = $_GET['onderwerp'] ?? ' ';
    $tekst = $_GET['tekst'] ?? ' ';
    $email = $_GET['email'] ?? ' ';

$to = "nathanieldewaal@hotmail.com";
$subject = "Contact forum ingevuld: " . $onderwerp;

$message = "
<html>
<head>
<title>" . $onderwerp . "</title>
</head>
<body>
<p>" . $naam . "</p>
<p>" . $email . "</p>" . 
"<p>" . $onderwerp . "</p>
<p>" . $tekst . "</p>" . 
"</body>
</html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: <portfolio@devn.eu>' . "\r\n";

mail($to,$subject,$message,$headers);
}
?>
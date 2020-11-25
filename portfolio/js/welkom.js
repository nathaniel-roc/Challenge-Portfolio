//welkom
var welkom = prompt("Wat is je naam?");
var element = document.getElementById("welkom");
element.innerHTML = "welkom " + welkom;

//leeftijd
var leeftijd = prompt("Wat is je leeftijd?");
if (leeftijd >= 18){
    document.getElementById("welkom").style.color = "#39804c";
} else{
    document.getElementById("welkom").style.color = "#8c2034";
}

let bezoeker = {
    voornaam: welkom,
    leeftijd: leeftijd
  }

  console.log(bezoeker);
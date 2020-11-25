<link rel="stylesheet" type="text/css" href="css/interesses.css">

<div id="complete">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'programmeren')" id="defaultOpen"><b>programmeren</b></button>
  <button class="tablinks" onclick="openCity(event, 'gamen')"><b>Gamen</b></button>
  <button class="tablinks" onclick="openCity(event, 'squash')"><b>Squash</b></button>
</div>

<div id="programmeren" class="tabcontent">
  <h2>Programmeren</h2>
  <p>Ik vind programmeren in PHP en JavaScript echt gaaf.</p>
  <p>Met name PHP vind ik in het bijzonder leuk omdat je echt dingen kan maken</p>
  <p> zoals een contact forum dat je <a href="contact.php">hier</a> vind</p>
</div>

<div id="gamen" class="tabcontent">
  <h2>Gamen</h2>
  <p>En ja dit kan ik natuurlijk niet weglaten gamen.</p>
  <p>Ik game zoals bijna iedereen in deze sector iedere avond een paar uur lang</p>
  <p>Dat is gewoon lekker een beetje andere afknallen met vrienden</p> 
</div>

<div id="squash" class="tabcontent">
  <h2>Squash</h2>
  <p>Dat is de enige sport die ik iedere vrijdag beoefen.</p>
  <p>Als je niet weet wat squash is leg ik het even uit.</p>
  <p>Squash is een soort tennis met een kleinere zwarte bal die je tegen een muur slaat</p>
</div>
</div>

<script>
  //interesses tab menu

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  document.getElementById("defaultOpen").click();

</script>
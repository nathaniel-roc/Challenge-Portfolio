<link rel="stylesheet" type="text/css" href="css/projecten.css">

<div id="complete">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'challenge1')" id="defaultOpen"><b>Deze Challenge</b></button>
</div>

<div id="challenge1" class="tabcontent">
  <h2>Deze Challenge</h2>
  <p>In deze Challenge moest ik een portfolio maken.</p>
  <p>Ik heb deze Challenge gemaakt met HTML, CSS, JavaScript en PHP.</p>
  <p>Dat heb ik gedaan omdat ik dan meerdere bestanden in een pagina kan krijgen wat zorgt voor meer overzicht.</p>
</div>
</div>
<script>
  //projecten tab menu

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
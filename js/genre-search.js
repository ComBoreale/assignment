function Genremmo() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "mmo.php");
  xhttp.send();
}

function Genrejrpg() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "jrpg.php");
  xhttp.send();
}

function Genreturn() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "turn.php");
  xhttp.send();
}

function Genresingle() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "single.php");
  xhttp.send();
}

function Genresim() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "sim.php");
  xhttp.send();
}

function Genreshooter() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "shooter.php");
  xhttp.send();
}

function Genreparty() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "party.php");
  xhttp.send();
}

function Genrehorror() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "horror.php");
  xhttp.send();
}

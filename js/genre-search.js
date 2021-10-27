function Fulllist() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/full_list.php");
  xhttp.send();
}

function Genremmo() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/mmo.php");
  xhttp.send();
}

function Genrejrpg() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/jrpg.php");
  xhttp.send();
}

function Genreturn() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/turn.php");
  xhttp.send();
}

function Genresingle() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/single.php");
  xhttp.send();
}

function Genresim() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/sim.php");
  xhttp.send();
}

function Genreshooter() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/shooter.php");
  xhttp.send();
}

function Genreparty() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/party.php");
  xhttp.send();
}

function Genrehorror() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("insertHTML2").innerHTML = this.responseText;
  }
  xhttp.open("GET", "php/horror.php");
  xhttp.send();
}

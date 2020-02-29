
function loadDoc(){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
	  if (this.readyState == 4 && this.status == 200) {
	    document.getElementById("banner").innerHTML = this.responseText;
	  }
	}
xhttp.open("GET", "Scripts/ajax.php", true);
xhttp.send();
}

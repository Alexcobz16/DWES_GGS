$(document).ready( function () {
        //$('#example').DataTable();
    
      let xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           // Typical action to be performed when the document is ready:
           //$('#example').append(xhttp.responseText);
           console.log(xhttp);
        }
    };
    
    
      setTimeout(() => {
        xhttp.open("GET", "https://pokeapi.co/api/v2/pokemon/ditto", true);
        xhttp.send();
      }, 5000);
    } );
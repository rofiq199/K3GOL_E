function potong() {
    var tes = document.getElementById("potongjanggut").value;
    for (var i = 0; i < tes.length; i++) {
      if (tes[i].selected) {
        tes += parseInt(tes[i].value);
      }
    }
        
        document.getElementById("pilian").value = tes;
}

function semirRambut() {
    var baru = document.getElementById("semir").value;

        document.getElementById("pilian1").value=baru;
}


function totalit() {
  var input = document.getElementsByName("produk");
  var total = 0;
  var nilai = parseInt(document.getElementById("pilian").value);
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseInt(input[i].value);
    }
  }
    
 
  document.getElementById("total").value = total;
}





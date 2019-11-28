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
  var harga = document.getElementsByName("harga")
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += harga[i].value);
    }
  }
    
 
  document.getElementById("total").value = total;
}





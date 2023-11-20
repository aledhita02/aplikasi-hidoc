
var komentarKolom = document.getElementById('kolomKomentar');
var id = document.getElementById('id_artikel');

document.addEventListener("DOMContentLoaded", function(event) {
  //buat object ajax
  var xhr = new XMLHttpRequest();
  setInterval(function(){


    // alert('ok');

    //cek kesiapan ajax
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200) {
        komentarKolom.innerHTML = xhr.responseText;
      }
    }

    //eksekusi ajax
    xhr.open('GET','ajax/komentarArtikel.php?id=' + id.value , true);
    xhr.send();



  }, 500);
});

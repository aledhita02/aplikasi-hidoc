// ambil elemen

var keyword = document.getElementById('keyword');
var tombolCcari = document.getElementById('tombolCari');
var konten = document.getElementById('konten');

keyword.addEventListener('keyup',function(){

  //buat object ajax
  var xhr = new XMLHttpRequest();

  //cek kesiapan ajax
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200) {
      konten.innerHTML = xhr.responseText;
    }
  }

  //eksekusi ajax
  xhr.open('GET','ajax/cariDokter.php?keyword=' + keyword.value , true);
  xhr.send();

});

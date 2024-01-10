var komentarKolom = document.getElementById('kolomKomentar');
var id = document.getElementById('id_artikel');

document.addEventListener("DOMContentLoaded", function(event) {
  // Fungsi untuk melakukan long polling
  function longPoll() {
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function(){
      if (xhr.readyState == 4 && xhr.status == 200) {
        komentarKolom.innerHTML = xhr.responseText;
        // Setelah mendapatkan respons, lakukan long polling lagi
        longPoll();
      }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/komentarArtikel.php?id=' + id.value, true);
    xhr.send();
  }

  // Mulai long polling saat halaman dimuat
  longPoll();
});

function setupAjax(keywordElement, kontenElement, halaman) {
  if (keywordElement && kontenElement) {
    keywordElement.addEventListener("keyup", function () {
      var xhr = new XMLHttpRequest();

      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
          kontenElement.innerHTML = xhr.responseText;
        }
      };

      xhr.open("GET", halaman + keywordElement.value, true);
      xhr.send();
    });
  }
}

// Ambil elemen
var keyword = document.getElementById("keyword");
var keyword1 = document.getElementById("keyword1");
var keyword2 = document.getElementById("keyword2");
var keyword3 = document.getElementById("keyword3");

var konten = document.getElementById("konten");
var konten1 = document.getElementById("konten1");
var konten2 = document.getElementById("konten2");
var konten3 = document.getElementById("konten3");

// Tentukan halaman yang ingin diakses berdasarkan suatu kondisi
var halaman;

if (keyword && konten) {
  halaman = "ajax/cariChat.php?keyword=";
  setupAjax(keyword, konten, halaman);
} else if (keyword1 && konten1) {
  halaman = "ajax/cariChatHistory.php?keyword1=";
  setupAjax(keyword1, konten1, halaman);
} else if (keyword2 && konten2) {
  halaman = "ajax/cariChatDokter.php?keyword2=";
  setupAjax(keyword2, konten2, halaman);
} else if (keyword3 && konten3) {
  halaman = "ajax/cariChatRiwayatDokter.php?keyword3=";
  setupAjax(keyword3, konten3, halaman);
} else {
  halaman = "";
}

// ambil elemen

var sendkomentar = document.getElementById('sendkomentar');
var nama = document.getElementById('nama');
var komentar = document.getElementById('text');
var post = document.getElementById('post');




sendkomentar.addEventListener('click',function(){
  // alert(text.value);

  //buat object ajax
  var ajax = new XMLHttpRequest();

  // cek kesiapan ajax
  // xhr.onreadystatechange = function(){
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     chatlog.innerHTML = xhr.responseText;
  //   }
  // }

  //eksekusi ajax
  ajax.open('GET','process/komentar/tambahKomentar_proses.php?nama='+nama.value+'&komentar='+komentar.value+'&post='+post.value , true);
  ajax.send();
  $("#text").val("");
  // console.log("TEST12");
  // console.log("TEST1");
  // $('#count_message').html('0 / ' + 120 );
  // console.log("TEST2");

  // alert('Terkirim');

});

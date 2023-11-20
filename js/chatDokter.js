
// var isichat = document.getElementById('isichat');
// var tomboluser = document.getElementById('tomboluser');
//
// tomboluser.addEventListener('onclick',function(){
//
//   //buat object ajax
//   var xhr = new XMLHttpRequest();
//
//   //cek kesiapan ajax
//   xhr.onreadystatechange = function(){
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       // isichat.innerHTML = xhr.responseText;
//       console.log("ok");
//     }
//   }
//
//   //eksekusi ajax
//   xhr.open('GET','ajax/chatDokter.php?keyword=' + keyword.value , true);
//   xhr.send();
//
// });


function send_chat(){
  var id_konsul = $("#id_konsul").val();
  var id_user =  $("#id_user").val();
  var pesan =  $("#pesan").val();



  alert(id_user);

  // $.post('process/pesan/tambahPesanDokter_proses.php', {pesan:pesan, id_konsul:id_konsul, id_user:id_user},
  // function(){
  //   $("input#pesan").val("");
  //   alert("Pesan Terkirim");
  // });
}

$('button#sendchat').click(function(){
  // send_chat();
  alert("ok")
});

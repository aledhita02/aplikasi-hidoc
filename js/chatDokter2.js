// ambil elemen

var id_konsul = document.getElementById('id_konsul');
var id_user = document.getElementById('id_user');
var pesan = document.getElementById('pesan');
var sendchat = document.getElementById('sendchat');
var chatlog = document.getElementById('chatlog');
var tomboluser = document.getElementById('tomboluser');
var isichat = document.getElementById('isichat');
var session_id_user = document.getElementById('session_id_user');
var get_id_konsul = document.getElementById('get_id_konsul');


sendchat.addEventListener('click',function(){
  // alert(id_konsul.value);


  //buat object ajax
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200) {
      chatlog.innerHTML = xhr.responseText;
    }
  }

  //eksekusi ajax
  xhr.open('GET','process/pesan/tambahPesanDokter_proses.php?id_konsul='+id_konsul.value+'&id_user='+id_user.value+'&pesan='+pesan.value , true);
  xhr.send();

  $("#pesan").val("");

  alert('Terkirim');

});

function updateScroll(){

    chatlog.scrollTop = chatlog.scrollHeight;
}

function updateChat(){
  //buat object ajax
  // alert(session_id_user.value);
  var xhr = new XMLHttpRequest();

  // cek kesiapan ajax
  xhr.onreadystatechange = function(){
    if (xhr.readyState == 4 && xhr.status == 200) {
      isichat.innerHTML = xhr.responseText;
    }
  }

  xhr.open('GET','js/chatDokterUpdate.php?id_konsul='+get_id_konsul.value+'&id='+session_id_user.value , true);
  xhr.send();
  updateScroll();

};



// $(document).ready(function(){
//
//   alert('ok');
// });



// tomboluser.addEventListener('click',function(){
//   setTimeout(function(){ alert("Hello"); }, 3000)
//   // setInterval(function(){ alert("Hello"); }, 1000);
// });




// $(document).ready(function(){
//   setInterval(function(){ alert("Hello"); }, 3000);
//   });

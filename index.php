<?php

session_start();
include 'database/Spesialisasi.php';
include 'database/Dokter.php';
include 'database/Konsultasi.php';
include 'database/User.php';
include 'database/Pesan.php';

$baseURL = "//" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);

function isSafePage($page)
{
  return !preg_match('/\.\.\//', $page);
}

$allowedPages = [
  'dokter' => [
    'default_page' => 'select_main_dokter',
    'edit_profil',
    'pesan_pending',
    'pesan_proses',
    'pesan_history',
    ''
  ],
  'user' => [
    'default_page' => 'select_main_user',
    'select_main',
    'detail_berita',
    'select_chat_blank',
    'select_chat_blank_history',
    'select_chat',
    'edit_profil',
    'tambahKonsul_proses',
    'viewMoreKonsul',
    ''
  ],
  'admin' => [
    'default_page' => 'select_main_admin',
    'edit_profil',
    'lihat_artikel',
    'tabel_spesialis',
    'tabel_dokter',
    'tabel_user',
    ''
  ]
];

$allowedPagesGuest = [
  'default_guest' => [
    'select_main',
    'detail_berita',

  ]
];

if (!isset($_GET['p'])) {
  $page = "select_main";
  // include 'pages/'.$page .'.php';
} else {
  $page = $_GET['p'];
}
// print_r($_SESSION['role']);

if (isset($_SESSION['role'])) {
  if (isset($allowedPages[$_SESSION['role']]) && in_array($page, $allowedPages[$_SESSION['role']]) && isSafePage($page)) {
    include 'templates/header.php';

    include 'pages/' . $page . '.php';
    // echo $defaultPageRole; 
  } else {
    header("Location: $baseURL/index.php?p=" . $allowedPages[$_SESSION['role']]['default_page']);
    exit();
  }

} else {
  if (in_array($page, $allowedPagesGuest['default_guest']) && isSafePage($page)) {
    include 'templates/header.php';
    include 'pages/' . $page . '.php';

  } else {
    header("Location: $baseURL/index.php");
    exit();
  }
}

// include 'pages/select_main_user.php';
//nnti hacking attempt diganti redirect adjah

// echo "hacking attempt!";

// echo "Hacking attempt!";
// include 'pages/select_main_user.php';


  include 'templates/footer.php';

?>
<?php
session_start();
echo 'Halo '.$_SESSION['nama'].' selamat datang :D di halaman dua';
echo '<br>';
echo '<a href="tiga.php">ke halaman tiga</a>';
?>

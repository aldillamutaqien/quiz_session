<?php
session_start();
$_SESSION['nama']='Aldilla';

print_r ($_SESSION);
echo '<a href="dua.php">ke halaman dua</a>';

?>

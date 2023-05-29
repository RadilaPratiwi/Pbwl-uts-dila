<?php

require_once "inc/koneksi.php";
$kontak = mysqli_query($conn, "SELECT admin_name FROM tb_admin WHERE admin_id = 5");
$a = mysqli_fetch_object($kontak);

?>
<div class="info">
    <h2>Home</h2>
    Selamat Datang Di Website R.A Elektronik<strong><?php echo $a->admin_name?></strong><br>
</div>
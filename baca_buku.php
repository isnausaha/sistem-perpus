<?php
    $nama_file=$_GET['nama_file'];
    $file="gambar/$nama_file";
    echo '<embed src='.$file.' type="application/pdf" frameBorder="0" height="100%" width="100%">'
?>
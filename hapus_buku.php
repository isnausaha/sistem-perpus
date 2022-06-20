<?php
    $id_buku = $_GET['id_buku'];
    $query = mysqli_query($koneksi,"DELETE FROM tb_buku WHERE id_buku='$id_buku'");

    if ($query) {
        echo "<script>alert('data berhasil dihapus')</script>";
        echo "<script>location='main.php?hal=data_buku'</script>";
    } else {
        echo "<script>alert('data gagal dihapus')</script>";
        echo "<script>location='main.php?hal=data_buku'</script>";
    }
?>
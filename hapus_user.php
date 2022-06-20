<?php
    $id_user = $_GET['id_user'];
    $query = mysqli_query($koneksi,"DELETE FROM tb_user WHERE id_user='$id_user'");

    if ($query) {
        echo "<script>alert('data berhasil dihapus')</script>";
        echo "<script>location='main.php?hal=data_user'</script>";
    } else {
        echo "<script>alert('data gagal dihapus')</script>";
        echo "<script>location='main.php?hal=data_user'</script>";
    }
?>
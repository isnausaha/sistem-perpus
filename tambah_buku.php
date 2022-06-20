<div class="container mt-5">
<h3>tambah buku</h3><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="">nama buku</label>
                    <input class="form-control" name="nama_buku" placeholder="masukkan nama buku"></input>
                </div>
                <div class="form-group">
                    <label for="">nama file</label>
                    <input class="form-control" type="file" name="pdf" accept="application/pdf" placeholder="pilih file"></input>
                </div>
                <br>
                <button type="submit" name="simpan" class="btn btn-info">simpan</button>
            </form>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['simpan'])) {
        $nama_buku      = $_POST['nama_buku'];

        $lokasi         = $_FILES['pdf']['tmp_name'];
        $file           = $_FILES['pdf']['name'];
        $y              = explode('.',$file);
        $format         = strtolower(end($y));
        $namabaru       = uniqid();
        $namabaru       .= '.';
        $namabaru       .= $format;

        
        $query = mysqli_query($koneksi,"INSERT INTO tb_buku VALUES(null,'$nama_buku','$namabaru')");

        if (strlen($file)>0) {
            move_uploaded_file($lokasi,'gambar/'.$namabaru);
        }

        if ($query) {
            echo "<script>alert('data berhasil ditambahkan')</script>";
            echo "<script>location='main.php?hal=data_buku'</script>";
        }else{
            echo "<script>alert('data gagal ditambahkan')</script>";
            echo "<script>location='main.php?hal=tambah_buku'</script>";
        }
    }
?>
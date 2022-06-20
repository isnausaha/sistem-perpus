<div class="container mt-5">
<h3>tambah anggota</h3><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">nama anggota</label>
                    <input class="form-control" name="nama_user" placeholder="masukkan nama anggota"></input>
                </div>
                <div class="form-group">
                    <label for="">username</label>
                    <input class="form-control" name="username" placeholder="masukkan username anggota"></input>
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input class="form-control" name="password" placeholder="masukkan password anggota"></input>
                </div>
                <br>
                <button type="submit" name="simpan" class="btn btn-info">simpan</button>
            </form>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['simpan'])) {
        $nama_user = $_POST['nama_user'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        
        $query=mysqli_query($koneksi,"INSERT INTO tb_user VALUES(null,'$nama_user','$username','$password')");
        if ($query) {
            echo "<script>alert('data berhasil ditambahkan')</script>";
            echo "<script>location='main.php?hal=data_user'</script>";
        }else{
            echo "<script>alert('data gagal ditambahkan')</script>";
            echo "<script>location='main.php?hal=tambah_user'</script>";
        }
    }
?>
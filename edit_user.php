<div class="container mt-5">
<h3>edit anggota</h3><hr>
    <div class="card shadow-lg p-3 mb-5">
        <div class="card-body">
            <?php
                $id_user = $_GET['id_user'];
                $query =mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id_user='$id_user'");
                $rows=mysqli_fetch_array($query);
            ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">nama anggota</label>
                    <input class="form-control" name="nama_user" value="<?=$rows['nama_user']?>" placeholder="masukkan nama anggota">
                    <input type="hidden" value="<?=$rows['id_user']?>" name="id_user">
    
                </div>
                <div class="form-group">
                    <label for="">username</label>
                    <input class="form-control" name="username" value="<?=$rows['username']?>" placeholder="masukkan username user">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input class="form-control" name="password" placeholder="masukkan password user">
                </div>
                <br>
                <button type="submit" name="simpan" class="btn btn-info">update</button>
            </form>
        </div>
    </div>
</div>
<?php
    if (isset($_POST['simpan'])) {
        $nama_user = $_POST['nama_user'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $id_user = $_POST['id_user'];

        $query=mysqli_query($koneksi,"UPDATE tb_user SET nama_user='$nama_user',username='$username',password='$password' WHERE id_user='$id_user'");
        if ($query) {
            echo "<script>alert('data berhasil diedit')</script>";
            echo "<script>location='main.php?hal=data_user'</script>";
        }else{
            echo "<script>alert('data gagal diedit')</script>";
            echo "<script>location='main.php?hal=edit_user'</script>";
        }
    }
?>
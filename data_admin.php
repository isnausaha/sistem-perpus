<div class="container mt-5">
    <h2>data admin</h2><br>
    <a href="main.php?hal=tambah_admin" class="btn btn-info">tambah data</a><br>
    <hr>
    <table id="example" class="table table_striped table_bordered">
        <thead>
            <th>NO</th>
            <th>nama admin</th>
            <th>username</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php
                $no=1;
                $query=mysqli_query($koneksi,"SELECT * FROM tb_admin");
                while($rows=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $rows['nama_admin']?></td>
                <td><?= $rows['username']?></td>
                <td>
                    <a href="main.php?hal=edit_admin&id_admin=<?= $rows['id_admin'] ?>" class="btn btn-warning btn-sm">edit</a>
                    <a onclick="return confirm('anda yakin hapus data?')" href="main.php?hal=hapus_admin&id_admin=<?= $rows['id_admin'] ?>" class="btn btn-danger btn-sm">hapus</a>
                </td>
            </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>
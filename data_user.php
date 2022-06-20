<div class="container mt-5">
    <h2>data anggota</h2><br>
    <a href="main.php?hal=tambah_user" class="btn btn-info">tambah data</a><br>
    <hr>
    <table id="data" class="table table_striped table_bordered">
        <thead>
            <th>NO</th>
            <th>nama anggota</th>
            <th>username</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php
                $no=1;
                $query=mysqli_query($koneksi,"SELECT * FROM tb_user");
                while($rows=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $rows['nama_user']?></td>
                <td><?= $rows['username']?></td>
                <td>
                    <a href="main.php?hal=edit_user&id_user=<?= $rows['id_user'] ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> edit</a>
                    <a onclick="return confirm('anda yakin hapus data?')" href="main.php?hal=hapus_user&id_user=<?= $rows['id_user'] ?>" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i> hapus</a>
                </td>
            </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>
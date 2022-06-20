<div class="container mt-5">
    <h2>data buku</h2><br>
    <a href="main.php?hal=tambah_buku" class="btn btn-info">tambah data</a><br>
    <hr>
    <table id="example" class="table table_striped table_bordered">
        <thead>
            <th>NO</th>
            <th>nama buku</th>
            <th>cek</th>
            <th>aksi</th>
        </thead>
        <tbody>
            <?php
                $no=1;
                $query=mysqli_query($koneksi,"SELECT * FROM tb_buku");
                while($rows=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $rows['nama_buku']?></td>
                <td><a href="main.php?hal=baca_buku&nama_file=<?= $rows['nama_file'] ?>">lihat buku</a></td>
                <td>
                    <a href="main.php?hal=edit_buku&id_buku=<?= $rows['id_buku'] ?>" class="btn btn-warning btn-sm">edit</a>
                    <a onclick="return confirm('anda yakin hapus data?')" href="main.php?hal=hapus_buku&id_buku=<?= $rows['id_buku'] ?>" class="btn btn-danger btn-sm">hapus</a>
                </td>
            </tr>
                <?php
                }
                ?>
        </tbody>
    </table>
</div>
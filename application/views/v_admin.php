<div class="kiri">
    <h2>Tambah user</h2>
    <form method="post">
        <input type="text" name="nma_admin" placeholder="nma_admin">
        <input type="text" name="no_telp" placeholder="nomor telepon">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="simpan" value="Simpan">
    </form>
</div>

<div class="kanan">
    <h2>data user</h2>
    <table>
        <tr>
            <td>no</td>
            <td>nama</td>
            <td>no hp</td>
            
        </tr>
        <?php $no=1; foreach($admin as $duser) :?>
        <tr>
            <td><?php echo $no; ?><?</td>
            <td><?php echo $duser->nma_admin; ?></td>
            <td><?php echo $duser->no_telp; ?></td>
           
        </tr>
        <?php $no++; endforeach; ?>
    </table>   
</div>
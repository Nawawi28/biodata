<div class="kiri">
    <h2>Input Data menu</h2>
    <form method="post">
        <input type="text" name="nmmenu" placeholder="nama menu">
        <input type="text" name="harga" placeholder="harga">
        <input type="text" name="gambar" placeholder="gambar">
        <input type="submit" name="simpan" value="simpan">
    </form>
</div>

<div class="kanan">
    <h2>Tampil daftar menu</h2>
    <table>
    <tr>
        <td>no</td>
        <td>nama menu</td>
        <td>harga</td>
        <td>gambar</td>
        <td>action</td>
    </tr>
    <?php
    if(!empty($menu)){
    $no=1; foreach($menu as $dmenu):?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $dmenu->nmmenu; ?></td>
        <td>Rp.<?php echo number_format($dmenu->harga); ?></td>
        <td><?php echo $dmenu->gambar; ?></td>
        <td><a href="<?php echo base_url().'C_menu/edit'.$dmenu->kdmenu; ?>">edit </a> | <a href="<?php echo base_url().'C_menu/hapus/'.$dmenu->kdmenu; ?>" onclick="return confirm('apakah anada yakin ingin menghapus data ini?')">hapus</a></td>
    </tr>
    <?php $no++; endforeach; }else{ ?>
        <tr>
        <td colspan="5">data kosong</td>
        </tr>
    <?php }?>
    </table>
  </div>
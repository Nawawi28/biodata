<html>
<head>
    <title>Form Input Matakuliah</title>
</head>
<body>
    <?php echo validation_errors(); ?>
     
         <form action="<?= base_url('matakuliah/cetak'); ?>"
method="post">
    <table>
        <tr>
             <th colspan="3">
                    Form Input Data Mata Kuliah
             </th>
        </tr>
         <tr>
            <td colspan="3">

            <hr>
         </td>
        </tr>
        <tr>
            <th>Kode MTK</th>
             <th>:</th>
            <td>
                <input type="text" name="kode" id="kode">
         </td>
    </tr>
    <tr>
        <th>Nama MTK</th>
        <td>:</td>
        <td>
            <input type="text" name="namamtk" id="namamtk">
        </td>
    </tr>
    <tr>
        <th>Kelas</th>
        <td>:</td>
        <td>
            <input type="text" name="kelas" id="kelas">
        </td>
    </tr>
    <tr>
        <th>Nama</th>
        <td>:</td>
        <td>
            <input type="text" name="nama" id="nama">
        </td>
    </tr>
    
    <tr>
         <td colspan="3" align="center">
               <input type="submit" value="Submit">
         </td>
     </tr>
    </table>
     </form>

</body>
</html